<?php
/**
* File: /plugins/hybridauth/hybridauth_settings.php
* Purpose: Admin settings for the HybridAuth plugin
*
* PHP version 5
*
* LICENSE: The HybridAuth developed for
* Hotaru CMS is free software: you can redistribute it and/or
* modify it under the terms of the GNU General Public License as
* published by the Free Software Foundation, either version 3 of
* the License, or (at your option) any later version.
*
* HybridAuth Hotaru is distributed in the hope that
* it will be useful, but WITHOUTANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* You should have received a copy of the GNU General Public License along
* with Hotaru CMS. If not, see http://www.gnu.org/licenses/.
*
* @category  Content Management System
* @package   HotaruCMS
* @author    Graeme 
* @copyright Copyright (c) 2013, Graeme
* @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link      http://www.hotarucms.org/
*/
 
class HybridAuthSettings
{
     /**
     * Admin settings for the Users plugin
     */
    public function settings($h)
    {
                    
        echo "<h1>" . $h->lang["hybridauth_settings_header"] . "</h1>\n";
        
  
        ?>

<h3 style="color:red">Instructions: </h3>
<p style="color:red">Please read all before attempting to install:</p>
<ol>
    <li> Start off by creating your social apps- you need an ID and Key for each provider - input these details as instructed on the hybridauth install page</li>
    <li>Run the HybridAuth Installer by clicking the installer button below</li>
    <li>Once you have installed, you must delete the install file located inside of: <a href="<?php echo BASEURL;?>content/plugins/hybridauth/hybridauth/">
        <?php echo BASEURL;?>content/plugins/hybridauth/hybridauth/
        </a></li>
        <li><b>Once you delete the install file, you will not be able to make any further changes to your HybridAuth settings</b>,
            so make sure you test your configuration is correct before deleting. 
        <li>However, if you have deleted the install.php, file and need to change your settings, you can
            just get hold of the original install.php file, and drop it back inside the plugins/hybridauth/hybridauth folder.
        <li> Finally, put the users_account.php into the following directory: plugins/users/templates/
</ol>
<br>

<a class="btn btn-success"href="<?php echo BASEURL?>content/plugins/hybridauth/hybridauth/install.php"><h4>HybridAuth 2.1.2 Installer</h4></a>

<?php }
}
?>
