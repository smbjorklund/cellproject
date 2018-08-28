<?php

class TranscoderAbstractionFactoryWeb extends TranscoderAbstractionFactory implements TranscoderFactoryInterface {

  protected $options = array();

  public function __construct() {
    parent::__construct();
  }

  public function getCodecs() {
    $codecs = array(
      'encode' => array(
        'video' => array(
          'h264' => 'H.264 (default)',
          'flv' => 'FLV',
          'vp8' => 'VP8',
          'theora' => 'Theora',
        ),
        'audio' => array(
          'aac' => 'AAC (default for most cases)',
          'mp3' => 'MP3',
          'vorbis' => 'Vorbis (default for VP8 and Theora)',
        )
      ),
      'decoding' => array()
    );
    return $codecs;
  }

  public function getAvailableFormats($type = FALSE) {
    return array(
      'flv' => 'FLV',
      'mp4' => 'MP4',
      'webm' => 'WebM',
    );
  }

  public function setInput(array $file) {
    parent::setInput($file);
    // 'source1' is the label for this input
    $this->options['inputs'][] = array(
      'label' => 'source1',
      'source' => array(
        'url' => file_create_url($this->settings['input']['uri']),
      )
    );
  }

  public function setOptions(array $options) {
    // See video_preset_default_form() in video/modules/video_ui/video.preset.inc for possible option keys.
    // See video_transcoding_service.module for parameters supported by service.
    global $base_url;
    $video_params = array();
    if (is_array($options)) {
      foreach ($options as $key => $value) {
        if (empty($value) || $value === 'none')
          continue;
        switch ($key) {
	  case 'test_mode':
            $video_params['test_mode'] = $value;
            break;
	  case 'video_extension':
	    $video_params['format']['name'] = $value;
            break;
          case 'deinterlace':
            if ($value == 'off') {
              $video_params['deinterlace'] = FALSE;
            }
            else {
              $video_params['deinterlace'] = TRUE;
            }
            break;
          case 'frame_rate':
            $video_params['frame_rate'] = $value;
            break;
          case 'wxh':
            $video_params['size'] = $value;
            break;
          case 'skip_video':
            $video_params['skip_video'] = $value;
            break;
          case 'skip_audio':
            $video_params['skip_audio'] = $value;
            break;
          case 'audio_channels':
            $video_params['audio_channels'] = $value;
            break;
          case 'clip_start':
            $video_params['clip_start'] = $value;
            break;
          case 'clip_length':
            $video_params['clip_length'] = $value;
            break;

          case 'video_codec':
            $video_params['format']['options']['video_codec']['name'] = $value;
            break;
          case 'video_quality':
            $video_params['format']['options']['video_codec']['options']['quality'] = $value;
            break;
          case 'video_speed':
            $video_params['format']['options']['video_codec']['options']['speed'] = $value;
            break;
          case 'keyframe_interval':
            $video_params['format']['options']['video_codec']['options']['keyframe_max_distance'] = $value;
            break;
          case 'video_bitrate':
            $video_params['format']['options']['video_codec']['options']['bitrate'] = $value;
            break;
          case 'bitrate_cap':
            $video_params['format']['options']['video_codec']['options']['max_rate'] = $value;
            break;
          case 'buffer_size':
            $video_params['format']['options']['video_codec']['options']['buffer_size'] = $value;
            break;
          case 'one_pass':
            $video_params['format']['options']['video_codec']['options']['one_pass'] = $value;
            break;

          case 'h264_profile':
            $video_params['format']['options']['video_codec']['options']['profile'] = $value;
            break;
          case 'h264_level':
            $video_params['format']['options']['video_codec']['options']['level'] = $value;
            break;
          case 'h264_max_ref_frames':
            $video_params['format']['options']['video_codec']['options']['max_ref_frames'] = $value;
            break;

          case 'audio_codec':
            $video_params['format']['options']['audio_codec']['name'] = $value;
            break;
          case 'audio_quality':
            $video_params['format']['options']['audio_codec']['options']['quality'] = $value;
            break;
          case 'audio_bitrate':
            $video_params['format']['options']['audio_codec']['options']['bitrate'] = $value;
            break;
          case 'audio_sample_rate':
            $video_params['format']['options']['audio_codec']['options']['sample_rate'] = $value;
            break;

          case 'video_preset':
          case 'video_aspectmode':
          case 'video_upscale':
          case 'max_frame_rate':
          case 'autolevels':
          case 'deblock':
          case 'denoise':
            // unsupported
            break;

        }
      }

      $this->options['outputs'] = array();

      $add_output = TRUE;
      foreach ($this->options['outputs'] as &$output) {
        if ($output['label'] == 'transcoded_video') {
          $output['options'] = $video_params;
          $add_output = FALSE;
        }
      }
      if ($add_output) {
        $this->options['outputs'][] = array(
          'label' => 'transcoded_video',
          'sources' => array('source1'),
          'options' => $video_params
        );
      }

      // Thumbnails; 'thumbnails' is the label for this output
      $schema_thumb_path = file_uri_scheme($this->settings['input']['uri']) . '://' . variable_get('video_thumbnail_path', 'videos/thumbnails') . '/' . $this->settings['input']['fid'];
      $final_path = '/' . file_uri_target($schema_thumb_path);
      $this->options['outputs'][] = array(
        'label' => 'thumbnails',
        'sources' => array('source1'),
        'options' => array(
          'format' => array(
            'name' => 'image',
            'options' => array(
              'number_of_frames' => variable_get('video_thumbnail_count', 5),
              'vcodec' => array(
                'name' => 'jpeg',
                'options' => array('quality' => 3)
              )
            )
          ),
          'size' => variable_get('video_thumbnail_size', '320x240'),
        ),
        'destination' => array(
          'base_url' => variable_get('video_web_base_url', 'ftp://[user]:[password]@[ftp.url]') . $final_path,
          'pattern' => 'thumbnail-' . $this->settings['input']['fid'] . '-%03d.jpg',
        )
      );

      // Notifications
      $this->options['notify_url'] = variable_get('video_web_postback', $base_url . '/postback/jobs');
    }

    // TODO: In case of error, write to watchdog and return FALSE to abort conversion.
    return TRUE;
  }

  public function setOutput($output_directory, $output_name, $overwrite_mode = FILE_EXISTS_REPLACE) {
    parent::setOutput($output_directory, $output_name, $overwrite_mode);
    $new_output = array(
      'label' => 'transcoded_video',
      'sources' => array('source1'),
      'destination' => array(
        'url' => variable_get('video_web_base_url', 'ftp://[user]:[password]@[ftp.url]') . '/' . file_uri_target($this->settings['base_url']) . '/' . $this->settings['filename'],
      )
    );

    $add_output = TRUE;
    foreach ($this->options['outputs'] as &$output) {
      if ($output['label'] == 'transcoded_video') {
        $output = array_merge($output, $new_output);
        $add_output = FALSE;
      }
    }
    if ($add_output) {
      $this->options['outputs'][] = $new_output;
    }
  }

  public function extractFrames($destinationScheme, $format) {
    // Check if the job has been completed.
    // If the job has not been completed, don't bother checking for
    // thumbnails
    $fid = $this->settings['input']['fid'];
    $job = video_jobs::load($fid);
    if (empty($job)) {
      return array();
    }
    // No thumbnails available yet
    if ($job->video_status != VIDEO_RENDERING_COMPLETE) {
      return array();
    }

    $path = variable_get('video_thumbnail_path', 'videos/thumbnails') . '/' . $fid;

    // Get the file system directory.
    $dsturibase = $destinationScheme . '://' . $path . '/';
    file_prepare_directory($dsturibase, FILE_CREATE_DIRECTORY);
    $dstwrapper = file_stream_wrapper_get_instance_by_scheme($destinationScheme);

    $thumbs = array();
    // Total thumbs to generate
    $no_of_thumbnails = variable_get('video_thumbnail_count', 5);
    for ($i = 0; $i < $no_of_thumbnails; $i++) {
      $filename = file_munge_filename('thumbnail-' . $fid . '-' . sprintf('%03d', $i) . '.jpg', '', TRUE);
      $dsturi = $dsturibase . $filename;

      $thumb = new stdClass();
      $thumb->status = 0;
      $thumb->filename = $filename;
      $thumb->uri = $dsturi;
      $thumb->filemime = $dstwrapper->getMimeType($dsturi);
      $thumbs[] = $thumb;
    }

    return !empty($thumbs) ? $thumbs : FALSE;
  }

  public function execute() {
    $fields = array(
      'name' => $this->settings['filename'],
      'inputs' => $this->options['inputs'],
      'outputs' => $this->options['outputs'],
      'notify_url' => $this->options['notify_url'],
    );

    $url = variable_get('video_web_url', NULL) . '/video_transcoder.json';
    $options = array();
    $options['method'] = 'POST';
    $options['data'] = http_build_query($fields, '', '&');
    $options['lauth'] = array(
      'lauth_keyid' => variable_get('video_web_key', ''),
      'lauth_secret' => variable_get('video_web_secret', '')
    );
    $result = lauth_api_http_request($url, $options);

    if ($result->code != 200) {
      $error = t('Error using WEB video transcoder: %code %error', array('%code' => $result->code, '%error' => $result->error));
      $this->errors['execute'] = $error;
      watchdog('web_video_transcoder', $error, array(), WATCHDOG_ERROR);
      return FALSE;
    }

    $data = drupal_json_decode($result->data);
    if (isset($data['job_id'])) {
      // Setup our converted video object
      // for the outout uri we should change ftp://, sftp:// -> public:// or private://
      $output_uri = variable_get('video_web_base_url', 'ftp://[user]:[password]@[ftp.url]') . '/' . file_uri_target($this->settings['base_url']) . '/' . $this->settings['filename'];
      switch (file_uri_scheme($output_uri)) {
        case 'ftp':
        case 'sftp':
          // thanks to D7 stream wrappers
          $output_uri = file_uri_scheme($this->settings['input']['uri']) . '://' . file_uri_target($this->settings['base_url']) . '/' . $this->settings['filename'];
          break;
        case 's3':
          // TODO: add support for S3
          //$final_path = '/' . file_uri_target($this->settings['base_url']);
          //$output_uri = 's3:/' . $final_path . '/' . $this->settings['filename'];
          break;
      }
      $output = new stdClass();
      $output->filename = $this->settings['filename'];
      $output->uri = $this->settings['base_url'] . '/' . $this->settings['filename'];
      $output->filemime = file_get_mimetype($output_uri);
      $output->filesize = 0;
      $output->timestamp = time();
      $output->jobid = $data['job_id'];
      $output->duration = 0;
      return $output;
    }
    else {
      $error = t('No job id returned by WEB video transcoder: %data', array('%data' => $result->data));
      $this->errors['execute'] = $error;
      watchdog('web_video_transcoder', $error, array(), WATCHDOG_ERROR);
      return FALSE;
    }
  }

  public function getName() {
    return 'Web Video Service';
  }

  public function getValue() {
    return 'TranscoderAbstractionFactoryWeb';
  }

  public function getVersion() {
    return '1.0';
  }

  public function adminSettings() {
    global $user;
    global $base_url;
    $form = array();

    $form['video_web_start'] = array(
      '#type' => 'markup',
      '#markup' => '<div id="' . $this->getValue() . '">',
    );
    $form['web_info'] = array(
      '#type' => 'fieldset',
      '#title' => t('Web Video Service'),
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
    );
    $form['web_info']['video_web_url'] = array(
      '#type' => 'textfield',
      '#title' => t('Web Video Service URL'),
      '#default_value' => variable_get('video_web_url', NULL),
      '#description' => t('Web Video Service URL. Example: http://www.example.com/video')
    );
    $form['web_info']['video_web_key'] = array(
      '#type' => 'textfield',
      '#title' => t('Web Video Service Key'),
      '#default_value' => variable_get('video_web_key', NULL),
      '#description' => t('Web Video Service Key.')
    );
    $form['web_info']['video_web_secret'] = array(
      '#type' => 'textfield',
      '#title' => t('Web Video Service Secret'),
      '#default_value' => variable_get('video_web_secret', NULL),
      '#description' => t('Web Video Service Secret.'),
      '#attributes' => array('autocomplete' => 'off')
    );
    $form['web_info']['video_web_postback'] = array(
      '#type' => 'textfield',
      '#title' => t('Postback URL for Web Video Service'),
      '#description' => t('Important : Do not change this if you do not know
        what your doing. This postback URL will receive video data when they are completed transcoding.'),
      '#default_value' => variable_get('video_web_postback', $base_url . '/postback/jobs'),
    );
    $form['web_info']['video_web_base_url'] = array(
      '#type' => 'textfield',
      '#title' => t('Output file base'),
      '#description' => t('Where to store the transcoded file.
        Use \'file://\' (without quotes) to ask
        the transcoding service to temporarilly store the file on its
        filesytem. When the job is finished, this module will retrieve it
        automatically using HTTP requests. This is the simplest way but
        requires curl to be enabled on this server. On the server, the files are
        available publicly but the filenames are hard to guess.

        You can also ask the transcoding service to push the file in
        a FTP, FTPS, or SFTP directory. To do so, enter an
        URL where the service will put the transcoded file. If your using ftp://, sftp://
        or similar then you have to <b>mount sites/default/files folder to FTP base folder</b> before
        create videos.<br/> You can use <em>mount</em> command (mount --bind /source_dir /dest_dir_01):
        <br/> Eg : <br/><code>1. mkdir /home/USERNAME/videos</code><br/>
        <code>2. mount --bind /var/www/html/DRUPAL/sites/default/files/videos/ /home/USERNAME/files/videos</code><br/>
        <code>3. cd /home/USERNAME/videos</code><br/>
        <code>4. ls -l</code><br/>
        <code><b>It should display </b><br/>converted<br/>original<br/>thumbnails</code><br/>
        <code>5. chown -R USERNAME:USERNAME videos/</code>
        <br/><br/>Example URL patterns: <code>ftp://user:password@ftp.example.com</code>'),
      '#default_value' => variable_get('video_web_base_url', 'ftp://[user]:[password]@[ftp.url]'),
    );

    $form['video_web_end'] = array(
      '#type' => 'markup',
      '#markup' => '</div>',
    );
    return $form;
  }

  public function adminSettingsValidate($form, &$form_state) {
    // TODO: do a test job using credentials
  }

  public function processPostback() {
    $status = $_POST['status'];
    $job_id = $_POST['job_id'];
    if (isset($_POST['status_detail'])) {
      $message = $_POST['status_detail'];
    }
    else {
      $message = '';
    }

    watchdog('web_video_transcoder', t('Web : Postback received from the Web Transcoding servers for remote job: !jobid; status: @status.', array('!jobid' => $job_id, '@status' => $status)));

    // Check output/job state
    $retry = 3;
    while ($retry) {
      $video_output = db_query("SELECT vid, original_fid, output_fid FROM {video_output} WHERE job_id = :job_id", array(':job_id' => $job_id))->fetch();
      if (!$video_output) {
        // Sometime, the video entity is still being saved when we are receiving the postback. Wait a bit a retry.
        sleep(5);
        $retry -= 1;
      }
      else {
        $retry = 0;
      }
    }
    if (!$video_output) {
      watchdog('web_video_transcoder', 'Can not load video output for job !job_id', array('!job_id' => $job_id));
      return;
    }

    if (!$video_output->vid) {
      watchdog('web_video_transcoder', 'No video job associated with video output !job_id', array('!job_id' => $job_id));
      return;
    }

    // Find the transcoding job.
    $fid = intval($video_output->original_fid);
    $video = video_jobs::load($fid);
    if (empty($video)) {
      watchdog('web_video_transcoder', 'Can not load video job for file !fid from video_output !vid', array('!fid' => $fid, '!vid' => $video_output->vid));
      return;
    }

    switch ($status) {
      case 'started':
        $video->statusupdated = time();
        $video->started = $video->statusupdated;
        $video->video_status = VIDEO_RENDERING_ACTIVE;
        video_jobs::update($video);
        break;

      case 'completed':
        $error = FALSE;

        if (isset($_POST['video_transcoding_service_urls'])) {
          /* Transcoding service has sent a list of URL pointing to
             the processed files. We should retrieve them now.

             URL are organised by group (thumbnails, video, etc):

             urls = ['thumbnails': ['file1': 'url1', 'file2': 'url2'],
                     'transcoded_video': ['file3': 'url3']]
          */
          $url_groups = $_POST['video_transcoding_service_urls'];

          $outputfile = file_load($video_output->output_fid);

          $thumbwrapper = file_stream_wrapper_get_instance_by_scheme('public');

          $existingthumbs = db_query('SELECT f.uri, f.fid, f.filesize FROM {file_managed} f INNER JOIN {video_thumbnails} t ON (f.fid = t.thumbnailfid) WHERE t.videofid = :fid', array(':fid' => $video->fid))->fetchAllAssoc('uri');

          // Find the entity to which the file belongs
          $entity = video_utility::loadEntity($video->entity_type, $video->entity_id);
          if (empty($entity)) {
            watchdog('web_video_transcoder', 'The entity to which the transcoded video belongs can\'t be found anymore. Entity type: @entity-type, entity id: @entity-id.', array('@entity-type' => $video->entity_type, '@entity-id' => $video->entity_id), WATCHDOG_ERROR);
            break;
          }

          // The following information was saved in video_jobs::create()
          $fieldname = $video->data['field_name'];
          $field = field_info_field($fieldname);
          $langcode = $video->data['langcode'];
          $delta = $video->data['delta'];

          // Insanity checks
          if (empty($entity->{$fieldname}[$langcode][$delta])) {
            // The field can't be found anymore. This may be a problem.
            watchdog('web_video_transcoder', 'The field to which video @filename was uploaded doesn\'t seem to exist anymore. Entity type: @entity-type, entity id: @entity-id, field name: @fieldname, field language: @langcode, delta: @delta.', array('@filename' => $video->filename, '@entity-type' => $video->entity_type, '@entity-id' => $video->entity_id, '@fieldname' => $fieldname, '@langcode' => $langcode, '@delta' => $delta), WATCHDOG_WARNING);
            break;
          }
          if ($entity->{$fieldname}[$langcode][$delta]['fid'] != $video->fid) {
            // The field does not contain the file we uploaded.
            watchdog('web_video_transcoder', 'The field to which video @filename was uploaded doesn\'t seem to contain this video anymore. Entity type: @entity-type, entity id: @entity-id, field name: @fieldname, field language: @langcode, delta: @delta.', array('@filename' => $video->filename, '@entity-type' => $video->entity_type, '@entity-id' => $video->entity_id, '@fieldname' => $fieldname, '@langcode' => $langcode, '@delta' => $delta), WATCHDOG_WARNING);
            break;
          }

          $thumbs = array();
          foreach ($url_groups as $label => $urls) {
            foreach ($urls as $dst => $src_url) {
              $destination_uri = file_build_uri($dst);
              file_prepare_directory(drupal_dirname($destination_uri), FILE_CREATE_DIRECTORY);

              $ch = curl_init($src_url);
              $fp = fopen($destination_uri, "w");

              if (!$fp) {
                watchdog('web_video_transcoder', t('Cannot open @local_file for writing.', array('@local_file' => $destination_uri)));
                $error = TRUE;
              }
              else {
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);

                curl_exec($ch);
                curl_close($ch);
                fclose($fp);

                if ($label == 'thumbnails') {
                  // Make the thumbnail a managed file.
                  $thumb = new stdClass();

                  if (isset($existingthumbs[$destination_uri])) {
                    $thumb->fid = $existingthumbs[$destination_uri]->fid;
                  }

                  $thumb->uid = $outputfile->uid; // $entity may not have a uid property, so take it from the output file.
                  $thumb->status = FILE_STATUS_PERMANENT;
                  $thumb->filename = drupal_basename($dst);
                  $thumb->uri = $destination_uri;
                  $thumb->filemime = $thumbwrapper->getMimeType($thumb->uri);
                  $thumb->type = 'image'; // For the media module
                  $thumb->filesize = filesize($destination_uri);
                  $thumb->timestamp = REQUEST_TIME;

                  file_save($thumb);

                  if (!isset($existingthumbs[$thumb->uri])) {
                    db_insert('video_thumbnails')->fields(array('videofid' => $video->fid, 'thumbnailfid' => $thumb->fid))->execute();
                    file_usage_add($thumb, 'file', $video->entity_type, $video->entity_id);
                  }

                  $thumbs[$thumb->fid] = $thumb;
                }
                else if ($label == 'transcoded_video') {
                  $outputfile->filesize = filesize($destination_uri);
                  $outputfile->uri = $destination_uri;
                  file_save($outputfile);
                }
              }
            }
          }

          $currentthumb = isset($entity->{$fieldname}[$langcode][$delta]['thumbnail']) ? intval($entity->{$fieldname}[$langcode][$delta]['thumbnail']) : 0;
          if (!empty($thumbs) && !isset($thumbs[$currentthumb])) {
            // Set a random thumbnail fid on the entity and save the entity.
            // Do not use array_rand. It almost always return the first element.
            $fids = array_keys($thumbs);
            shuffle($fids);
            $entity->{$fieldname}[$langcode][$delta]['thumbnail'] = array_pop($fids);
            switch ($video->entity_type) {
              case 'node':
                node_save($entity);
                break;
              case 'comment':
                comment_save($entity);
                break;
              default:
                // entity_save() is supplied by the entity module
                if (function_exists('entity_save')) {
                  entity_save($video->entity_type, $entity);
                }
                break;
            }
          }
        }

        if (!$error) {
          video_jobs::setCompleted($video);
          video_utility::clearEntityCache($video->entity_type, $video->entity_id);
        }
        else {
          video_jobs::setFailed($video);
        }

        break;

      case 'failed':
        video_jobs::setFailed($video);
        watchdog('web_video_transcoder', t('Web Transcoder reports errors; here is the log: "!log".', array('!log' => $message)), NULL, WATCHDOG_ERROR);
        break;
    }
  }

  public function getPixelFormats() {
    return NULL;
  }

  /**
   * Reset internal variables to their initial state.
   */
  public function reset($keepinput = FALSE) {
    parent::reset($keepinput);

    if (!$keepinput) {
      unset($this->options['inputs']);
    }
    unset($this->options['outputs']);
    unset($this->options['notify_url']);
  }

  public function isOffSite() {
    return TRUE;
  }
}
