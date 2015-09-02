<?php
require "../check-session.php";
$file=basename($_REQUEST['page']);
$url="Idea Gen Help.htm?";

?>
<script language="javascript">
<?php
switch($file)
{
	case "index.php": 			if($logged)
								{
									?> 
									window.location="<?php echo $url."AccountDashboard.html"; ?>";					
									<?php
								}
								else
								{
									?> 
									window.location="<?php echo $url."LoginScreen.html"; ?>";					
									<?php
								}
								break;
	case "register.php":		?> 
									window.location="<?php echo $url."NewUserRegistration.html"; ?>";					
								<?php
								break;
	case "create-theme.php":	?> 
								window.location="<?php echo $url."Creatingatheme.html"; ?>";					
								<?php
								break;
	case "theme-details.php":	?> 
								window.location="<?php echo $url."PostingIdeasonatheme.html"; ?>";					
								<?php
								break;
	case "create-openidea.php":	?> 
								window.location="<?php echo $url."SubmittingUnsolicitedIdea.html"; ?>";					
								<?php
								break;
	case "edit-category.php":	?> 
								window.location="<?php echo $url."ManageCategories.html"; ?>";					
								<?php
								break;
	case "manage-projects.php":	?> 
								window.location="<?php echo $url."ManageProjects.html"; ?>";					
								<?php
								break;
	case "manage-accounts.php":	?> 
								window.location="<?php echo $url."ManageAccounts.html"; ?>";					
								<?php
								break;
	case "user-rights.php":		?> 
								window.location="<?php echo $url."ManageUserRights.html"; ?>";					
								<?php
								break;
	case "search-themes.php":	?> 
								window.location="<?php echo $url."ExtensiveSearch.html"; ?>";					
								<?php
								break;
	case "dash.php":			?> 
								window.location="<?php echo $url."GeneratingDynamicGraphicalRepo.html"; ?>";					
								<?php
								break;
	case "view-themes.php":		?> 
								window.location="<?php echo $url."ExcelReports.html"; ?>";					
								<?php
								break;
	case "new-user.php":		?> 
								window.location="<?php echo $url."ApproveNewUser.html"; ?>";					
								<?php
								break;
	case "openidea-details.php":?> 
								window.location="<?php echo $url."Convertanunsolicitedideaintoth.html"; ?>";					
								<?php
								break;
	case "manage-reviewers.php":?> 
								window.location="<?php echo $url."Creatingatheme.html"; ?>";					
								<?php
								break;
	case "search-idea.php":		?> 
								window.location="<?php echo $url."ExtensiveSearch.html"; ?>";					
								<?php
								break;
       case "new_user_admin.php":?>
								window.location="<?php echo $url."ApproveNewUser.html"; ?>";
								<?php
								break;
	default:					?> 
								window.location="<?php echo $url; ?>";					
								<?php
								break;
}
?>
</script>