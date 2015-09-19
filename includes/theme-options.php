<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'General',
          'content'   => '<p>Help content goes here!</p>'
        )
      ),
      'sidebar'       => '<p>Sidebar content goes here!</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'analytics',
        'title'       => 'Analytics'
      ),
      array(
        'id'          => 'css',
        'title'       => 'Custom CSS'
      ),
      array(
        'id'          => 'sidebars',
        'title'       => 'Custom Sidebars'
      ),
      array(
        'id'          => 'comments',
        'title'       => 'Comments & Backers'
      ),

      array(
        'id'          => 'admin',
        'title'       => 'Admin'
      ),
      array(
        'id'          => 'updates',
        'title'       => 'Updates'
      ),
      array(
        'id'          => 'log',
        'title'       => '<strong>Changelog</strong>'
      )
    ),
    'settings'        => array( 


      array(
        'id'          => 'krown_changelog',
        'label'       => 'Changelog', 'krown',
        'desc'        => '<ul>
<li><strong>Version 1.3.3 : 8 August 2015</strong>
<br>~ Fixed a bunch of styling issues, especially for mobile devices and including the IgnitionDeck receipt print view<br><br></li>
<li><strong>Version 1.3.2 : 7 July 2015</strong>
<br>~ Added a fail safe against Envato API issues (fixed admin login problems)<br><br></li>
<li><strong>Version 1.3.1: 19 June 2015</strong>
<br>~ Fixed some remaining issues from the last update<br><br></li>
<li><strong>Version 1.3: 16 June 2015</strong>
<br>~ Added support for latest versions of IgnitionDeck plugins
<br>~ Added a search bar option for projects
<br>~ Added embedding code in project pages
<br>~ Fixed all kinds of other small bugs
<br>~ Updated the Revolution Slider plugin to v4.6.93<br><br></li>
<li><strong>Version 1.2.3: 17 March 2015</strong>
<br>~ Fixed some styling issues<br><br></li><li><strong>Version 1.2.2: 25 February 2015</strong>
<br>~ Added support for extra project dashboard buttons<br><br></li>
<li><strong>Version 1.2.1: 13 February 2015</strong>
<br>~ Updated the language files<br><br></li>
<li><strong>Version 1.2: 6 February 2015</strong>
<br>~ Added support for parent / child projects
<br>~ Added "backer\'s list" tab<br>
<br>~ Fixed an issue with the grid shortcode categories<br></li>
<li><strong>Version 1.1.1: 28 January 2015</strong>
<br>~ Fixed some styling issues<br><br></li>
<li><strong>Version 1.1: 20 December 2014</strong>
<br>~ Added WP 4.1 compatiblity
<br>~ Added changelog view in the backend
<br>~ Updated the Revolution Slider plugin to v4.6.5
<br>~ Fixed an issue with projects funded over 1000%<br><br></li>
<li><strong>Version 1.0.9: 12 November 2014</strong>
<br>~ Fixed an issue with ID v1.5.1 compatibility
<br>~ Fixed an issue with Stretch Goals v1.0.5 extension
<br>~ Fixed an issue with project dates in IDE dashboard<br><br></li>
<li><strong>Version 1.0.8: 4 November 2014</strong>
<br>~ Fixed another ID v1.0.5 compatibility issue<br><br></li>
<li><strong>Version 1.0.7: 29 October 2014</strong>
<br>~ Made theme compatible with ID v1.5.0
<br>~ Updated the Revolution Slider plugin to v4.6.2<br><br></li>
<li><strong>Version 1.0.6: 28 October 2014</strong>
<br>~ Fixed an issue in the IDE dashboard<br><br></li>
<li><strong>Version 1.0.5: 17 October 2014</strong>
<br>~ Fixed a bug with the trashing of multiple projects
<br>~ Fixed the section backgrounds not issue<br><br></li>
<li><strong>Version 1.0.4: 9 October 2014</strong>
<br>~ Fixed a layout issue caused by last update<br><br></li>
<li><strong>Version 1.0.3: 4 October 2014</strong>
<br>~ Added "fixed header" option
<br>~ Fixed some IE8 issues
<br>~ Fixed an issue with certain grids not working
<br>~ Fixed a bug in the child theme<br><br></li>
<li><strong>Version 1.0.2: 18 September 2014</strong>
<br>~ Added pagination option in the project grid shortcode
<br>~ Fixed the "reloading grid" issue<br><br></li>
<li><strong>Version 1.0.1: 13 September 2014</strong><br>
~ Added support for featured images (from IgnitionDeck 1.4.3)<br>
~ Fixed retina support<br>
~ Fixed other mobile (responsive) styling issues<br>
~ Added PSD files to the package<br><br>
</li>
<li><strong>Version 1.0: 10 September 2014</strong><br>
~ Initial release<br><br>
</li>
</ul>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'log',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'krown_allow_id_comments',
        'label'       => __('Enable IgnitionDeck project comments', 'krown'),
        'desc'       => __('If you enable project comments and also allow discussions (WordPress feature), users will be able to post comments on your project pages.', 'krown'),
        'std'         => 'true',
        'type'        => 'select',
        'section'     => 'comments',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'label' => __('Enable', 'krown'),
            'value' => 'true'
          ),
          array(
            'label' => __('Disable', 'krown'),
            'value' => 'false'
          )
        )
      ),
      array(
        'id'          => 'krown_allow_page_comments',
        'label'       => __('Enable page comments', 'krown'),
        'desc'       => __('If you enable page comments and also allow discussions (WordPress feature), users will be able to post comments on all of your regular pages (comments are not allowed in custom page templates).', 'krown'),
        'std'         => 'false',
        'type'        => 'select',
        'section'     => 'comments',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'label' => __('Enable', 'krown'),
            'value' => 'true'
          ),
          array(
            'label' => __('Disable', 'krown'),
            'value' => 'false'
          )
        )
      ),



      array(
        'id'          => 'krown_allow_id_backers',
        'label'       => __('Enable IgnitionDeck backers list', 'krown'),
        'desc'       => __('You can enable a backer list to appear along the tabs of each project. There are two different lists available - one which is created by the theme (both style and content) and one which is created by the plugin (only for ID Commerce users).', 'krown'),
        'std'         => 'false',
        'type'        => 'select',
        'section'     => 'comments',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'label' => __('Disable', 'krown'),
            'value' => 'false'
          ),
          array(
            'label' => __('Enable theme version', 'krown'),
            'value' => 'true'
          ),
          array(
            'label' => __('Enable IDC version', 'krown'),
            'value' => 'trueidc'
          )
        )
      ),
      array(
        'id'          => 'krown_tracking_enable',
        'label'       => 'Enable analytics',
        'desc'        => 'Please select this if you\'ll be using Google Analytics in the theme.',
        'std'         => 'disabled',
        'type'        => 'radio',
        'section'     => 'analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'enabled',
            'label'       => 'Enabled',
            'src'         => ''
          ),
          array(
            'value'       => 'disabled',
            'label'       => 'Disabled',
            'src'         => ''
          )
        ),
      ),

      array(
        'id'          => 'krown_sidebars_text',
        'label'       => 'About the sidebars', 'krown',
        'desc'        => 'All sidebars that you create here will appear both in the Widgets Page(Appearance &gt; Widgets), from where you\'ll have to configure them(put widgets inside them), and in the custom pages(default templates), where you\'ll be able to choose a sidebar for each page', 'krown',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'sidebars',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_sidebars',
        'label'       => 'Create Sidebars', 'krown',
        'desc'       => 'Please choose a unique title for each sidebar!', 'krown',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'sidebars',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'id',
            'label'       => 'ID', 'krown',
            'desc'       => 'Please write a lowercase id, with NO SPACES!!!',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),

      array(
        'id'          => 'krown_tracking',
        'label'       => 'Analytics code',
        'desc'        => 'Put your Analytics code inside here. Make sure you include the entire script, not just your ID.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_custom_css',
        'label'       => 'Custom CSS',
        'desc'        => 'Write any custom css here. Please don\'t change theme files, because you won\'t be able to easily update in the future.',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'css',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_custom_login_logo_uri',
        'label'       => 'Admin logo',
        'desc'        => 'Add a custom <strong>273x63</strong> image for the WordPress login page.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'admin',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_updates_about',
        'label'       => 'About',
        'desc'        => 'These two fields are required for the theme automatic updates. If you want to protect yourself against security attacks and have the latest features available as soon as they appear, you should complete this section, and you\'ll be notified about new theme updates whenever they appear on ThemeForest.',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_updates_user',
        'label'       => 'Username',
        'desc'        => 'Please insert your ThemeForest username.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_updates_api',
        'label'       => 'API Key',
        'desc'        => 'Please insert your <a target="_blank" href="http://themeforest.net/help/api">ThemeForest API key</a>.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}

?>