<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Kohana cheat sheet browser.
 *
 * @author     Alexander Kupreev (http://kupreev.com, mailto:alexander dot kupreev at gmail dot com)
 * @version    0.1
 */
class Controller_Cheatsheet extends Controller_Template {

    public $template = 'cheatsheet/template';

    public $ext = '.cs';

    /**
     * modified from userguide module controller
     */
    public function before()
    {
	if ($this->request->action() === 'media')
	{
            // Do not template media files
            $this->auto_render = FALSE;
	}
	else
	{

            // Use customized Markdown parser
            define('MARKDOWN_PARSER_CLASS', 'Kodoc_Markdown');

            // Load Markdown support
            require Kohana::find_file('vendor', 'markdown/markdown');

	}

	parent::before();
    }


    public function action_index()
    {
        $msg = array();

        $exclude_class = Kohana::config('cs.class');

        $classes = Kodoc::classes();

        foreach ($classes as $class)
        {
            if (isset($classes['kohana_'.$class]))
            {
                unset($classes['kohana_'.$class]);
            }

            if (in_array(strtolower($class),$exclude_class))
            {
                unset($classes[$class]);
            }
        }

        $is_cache = Kohana::config('cs.cache');

        // do we need to save actual state in cache
        $is_save_cache = FALSE;
        // check if caching turned on
        if ($is_cache)
        {
            // check whether classes set + exclude classes set was modified
            $cache_name = sha1(serialize($classes)).$this->ext;

            $dir = Kohana_Core::$cache_dir.DIRECTORY_SEPARATOR;

            if ( ! is_dir($dir))
            {
                $msg[] = 'No cache directory '.$dir;
                $is_save_cache = TRUE;
            } else {

                if (is_file($dir.$cache_name))
                {
                    $tmp = file_get_contents($dir.$cache_name);
                    if ($tmp)
                    {
                        $classes = unserialize($tmp);
                        $msg[] = 'Data loaded from cache';
                    } else {

                        $is_save_cache = TRUE; // set for data not be taken from cache
                        $msg[] = 'Failed to load cache';
                    }

                } else {

                    $is_save_cache = TRUE;

                    foreach (glob($dir.'*'.$this->ext) as $filename)
                    {
                        if ( ! unlink($filename))
                        {
                            $msg[] = 'Can not delete cache file '.$filename;
                        }
                    }
                }
            }
        }

        if ( ! $is_cache OR $is_save_cache)
        {

            foreach ($classes as $class)
            {
                $r_class = new Kodoc($class);

                // to prevent exception when Kodoc::properties() throws exception
                try
                {
                    $props = $r_class->properties();
                } catch (Exception $e) {
                    $props = array();

                    $msg[] = $e->getMessage();
                }

                $classes[$class] = array(
                                     'properties' => $props,//$r_class->properties(),
                                     'methods' => $r_class->methods(),
                                );

            }

            if ($is_save_cache)
            {
                if (is_dir($dir) AND is_writable($dir))
                {
                    if ( ! file_put_contents($dir.$cache_name, serialize($classes)))
                    {
                        $msg[] = 'Failed to save cache';
                    }
                } else {
                    $msg[] = 'Not exsisting or not writable cache dir';
                }

            }

        }

        $this->template->content = $classes;

        $this->template->msg = $msg;
    }

    /**
     * taken from userguide module controller
     */
    public function action_media()
    {
	// Get the file path from the request
	$file = $this->request->param('file');

	// Find the file extension
	$ext = pathinfo($file, PATHINFO_EXTENSION);

	// Remove the extension from the filename
	$file = substr($file, 0, -(strlen($ext) + 1));

	if ($file = Kohana::find_file('media', $file, $ext))
	{
       	// Send the file content as the response
            $this->request->response = file_get_contents($file);
	}
	else
	{
	// Return a 404 status
            $this->request->status = 404;
	}

	// Set the content type for this extension
	$this->request->headers['Content-Type'] = File::mime_by_ext($ext);
    }

    /**
     * modified from userguide module controller
     */
    public function after()
    {
	if ($this->auto_render)
	{
	// Get the media route
            $media = Route::get('docs/media');

            // Add styles
            $this->template->styles = array(
                $media->uri(array('file' => 'css/cs.css')) => 'screen',
            );

	// Add scripts
            $this->template->scripts = array(
                $media->uri(array('file' => 'js/jquery-1.3.2.min.js')),
                $media->uri(array('file' => 'js/autocolumn.min.js')),
                $media->uri(array('file' => 'js/cs.js')),

            );


        }

	return parent::after();
    }

}