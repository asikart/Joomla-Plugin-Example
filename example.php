<?php
/**
 * @package       Asikart.Plugin
 * @subpackage    folder.plg_example
 * @copyright     Copyright (C) 2012 Asikart.com, Inc. All rights reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Example Folder Plugin
 *
 * @package      Joomla.Plugin
 * @subpackage   Folder.example
 * @since        1.5
 */
class plgFolderExample extends JPlugin
{
    /**
     * Self instance
     *
     * @var plgFolderExample
     */
    public static $_self ;
    
    /**
     * Constructor
     *
     * @access      public
     * @param       object  $subject The object to observe
     * @param       array   $config  An array that holds the plugin configuration
     * @since       1.6
     */
    public function __construct(&$subject, $config)
    {
        parent::__construct( $subject, $config );
        
        // Load plugin language in front-end
        $this->loadLanguage();
        
        // Store Application in self
        $this->app = JFactory::getApplication();
        
        // Self reference
        self::$_self = $this ;
    }
    
    /**
     * Get self object instance.
     *
     * @return  plgFolderExample
     */
    public static function getInstance()
    {
        return self::$_self ;
    }
    
    
    
    // system Events
    // ======================================================================================
    
    /**
     * After Initialise Event.
     */
    public function onAfterInitialise()
    {
        
    }
    
    /**
     * After Route Event.
     */
    public function onAfterRoute()
    {
        
    }
    
    /**
     * After Dispatch Event.
     */
    public function onAfterDispatch()
    {
        
    }
    
    /**
     * After Render Event.
     */
    public function onAfterRender()
    {
        
    }
    
    
    
    // Content Events
    // ======================================================================================
    
    
    /**
     * Example prepare content method
     *
     * Method is called by the view
     *
     * @param    string    The context of the content being passed to the plugin.
     * @param    object    The content object.  Note $article->text is also available
     * @param    object    The content params
     * @param    int       The 'page' number
     * @since    1.6
     */
    public function onContentPrepare($context, &$article, &$params, $page=0)
    {
    }
    
    /**
     * Example after display title method
     *
     * Method is called by the view and the results are imploded and displayed in a placeholder
     *
     * @param    string        The context for the content passed to the plugin.
     * @param    object        The content object.  Note $article->text is also available
     * @param    object        The content params
     * @param    int           The 'page' number
     * @return    string
     * @since    1.6
     */
    public function onContentAfterTitle($context, &$article, &$params, $page=0)
    {
    }
    
    /**
     * Example before display content method
     *
     * Method is called by the view and the results are imploded and displayed in a placeholder
     *
     * @param    string        The context for the content passed to the plugin.
     * @param    object        The content object.  Note $article->text is also available
     * @param    object        The content params
     * @param    int           The 'page' number
     * @return    string
     * @since    1.6
     */
    public function onContentBeforeDisplay($context, &$article, &$params, $page=0)
    {
    }

    /**
     * Example after display content method
     *
     * Method is called by the view and the results are imploded and displayed in a placeholder
     *
     * @param    string        The context for the content passed to the plugin.
     * @param    object        The content object.  Note $article->text is also available
     * @param    object        The content params
     * @param    int           The 'page' number
     * @return    string
     * @since    1.6
     */
    public function onContentAfterDisplay($context, &$article, &$params, $page=0)
    {
    }
    
    /**
     * Example before save content method
     *
     * Method is called right before content is saved into the database.
     * Article object is passed by reference, so any changes will be saved!
     * NOTE:  Returning false will abort the save with an error.
     *You can set the error by calling $article->setError($message)
     *
     * @param    string      The context of the content passed to the plugin.
     * @param    object      A JTableContent object
     * @param    bool        If the content is just about to be created
     * @return   bool        If false, abort the save
     * @since    1.6
     */
    public function onContentBeforeSave($context, &$article, $isNew)
    {
    }
    
    /**
     * Example after save content method
     * Article is passed by reference, but after the save, so no changes will be saved.
     * Method is called right after the content is saved
     *
     * @param    string      The context of the content passed to the plugin (added in 1.6)
     * @param    object      A JTableContent object
     * @param    bool        If the content is just about to be created
     * @since    1.6
     */
    public function onContentAfterSave($context, &$article, $isNew)
    {
    }

    /**
     * Example before delete method.
     *
     * @param    string    The context for the content passed to the plugin.
     * @param    object    The data relating to the content that is to be deleted.
     * @return   boolean
     * @since    1.6
     */
    public function onContentBeforeDelete($context, $data)
    {
    }
    
    /**
     * Example after delete method.
     *
     * @param    string    The context for the content passed to the plugin.
     * @param    object    The data relating to the content that was deleted.
     * @return   boolean
     * @since    1.6
     */
    public function onContentAfterDelete($context, $data)
    {
    }

    /**
     * Example after delete method.
     *
     * @param    string    The context for the content passed to the plugin.
     * @param    array     A list of primary key ids of the content that has changed state.
     * @param    int       The value of the state that the content has been changed to.
     * @return    boolean
     * @since    1.6
     */
    public function onContentChangeState($context, $pks, $value)
    {
    }
    
    
    
    // Form Events
    // ====================================================================================
    
    
    /**
     * @param    JForm    $form    The form to be altered.
     * @param    array    $data    The associated data for the form.
     *
     * @return    boolean
     * @since    1.6
     */
    function onContentPrepareForm($form, $data)
    {
    }
    
    
    
    // User Events
    // ====================================================================================
    
    
    /**
     * Utility method to act on a user after it has been saved.
     *
     *
     * @param    array      $user       Holds the new user data.
     * @param    boolean    $isnew      True if a new user is stored.
     * @param    boolean    $success    True if user was succesfully stored in the database.
     * @param    string     $msg        Message.
     *
     * @return    void
     * @since    1.6
     */
    public function onUserBeforeSave($user, $isnew, $success, $msg = null)
    {
    }
    
    
    /**
     * Utility method to act on a user after it has been saved.
     *
     *
     * @param    array      $user       Holds the new user data.
     * @param    boolean    $isnew      True if a new user is stored.
     * @param    boolean    $success    True if user was succesfully stored in the database.
     * @param    string     $msg        Message.
     *
     * @return    void
     * @since    1.6
     */
    public function onUserAfterSave($user, $isnew, $success, $msg = null)
    {
    }
    
    /**
     * This method should handle any login logic and report back to the subject
     *
     * @param    array    $user        Holds the user data
     * @param    array    $options     Array holding options (remember, autoregister, group)
     *
     * @return    boolean    True on success
     * @since    1.5
     */
    public function onUserLogin($user, $options = array())
    {
    }
    
    /**
     * This method should handle any logout logic and report back to the subject
     *
     * @param    array    $user       Holds the user data.
     * @param    array    $options    Array holding options (client, ...).
     *
     * @return    object    True on success
     * @since    1.5
     */
    public function onUserLogout($user, $options = array())
    {
    }
    
    /**
     * Utility method to act on a user before it has been saved.
     *
     *
     * @param    array      $user       Holds the new user data.
     * @param    boolean    $isnew      True if a new user is stored.
     * @param    boolean    $success    True if user was succesfully stored in the database.
     * @param    string     $msg        Message.
     *
     * @return    void
     * @since    1.6
     */
    public function onUserBeforeDelete($user, $isnew, $success, $msg)
    {
    }
    
    /**
     * Remove all sessions for the user name
     *
     * @param    array      $user       Holds the user data
     * @param    boolean    $succes     True if user was succesfully stored in the database
     * @param    string     $msg        Message
     *
     * @return    boolean
     * @since    1.6
     */
    public function onUserAfterDelete($user, $success, $msg)
    {
    }
    
    /**
     * @param    string    $context    The context for the data
     * @param    int       $data       The user id
     * @param    object
     *
     * @return    boolean
     * @since    1.6
     */
    public function onContentPrepareData($context, $data)
    {
    }
}
