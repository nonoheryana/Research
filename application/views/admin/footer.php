</div>
<footer>
<div class="pull-right">
<i class="icon-heart"></i> Open Institute<strong></strong>
</div>
<div class="pull-left">
    <span id="year-copy">2013</span> © <strong><a href="">Open Institute</a></strong>
</div>
</footer>
</div>
<a href="http://pixelcave.com/demo/flatapp/index.php#" id="to-top"><i class="icon-chevron-up"></i></a>
<div id="modal-user-account" class="modal hide fade">
<div class="modal-body remove-padding">
<div class="block-tabs">
<div class="block-options">
<a href="javascript:void(0)" class="btn btn-danger" data-dismiss="modal"><i class="icon-remove"></i></a>
</div>
<ul class="nav nav-tabs" data-toggle="tabs">
<li class="active"><a href="http://pixelcave.com/demo/flatapp/index.php#modal-user-account-account"><i class="icon-cog"></i> Account</a></li>
<li><a href="http://pixelcave.com/demo/flatapp/index.php#modal-user-account-profile"><i class="icon-user"></i> Profile</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="modal-user-account-account">
<form action="./dashboard_files/dashboard.html" method="post" class="form-horizontal" onsubmit="return false;">
<div class="control-group">
<label class="control-label" for="modal-account-username">Username</label>
<div class="controls">
<input type="text" id="modal-account-username" name="modal-account-username" value="admin" class="disabled" disabled="">
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-account-email">Email</label>
<div class="controls">
<input type="text" id="modal-account-email" name="modal-account-email" value="admin@exampleapp.com">
</div>
</div>
<h4 class="sub-header">Change Password</h4>
<div class="control-group">
<label class="control-label" for="modal-account-pass">Current Password</label>
<div class="controls">
<input type="password" id="modal-account-pass" name="modal-account-pass">
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-account-newpass">New Password</label>
<div class="controls">
<input type="password" id="modal-account-newpass" name="modal-account-newpass">
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-account-newrepass">Retype New Password</label>
<div class="controls">
<input type="password" id="modal-account-newrepass" name="modal-account-newrepass">
</div>
</div>
</form>
</div>
<div class="tab-pane" id="modal-user-account-profile">
<form action="./dashboard_files/dashboard.html" method="post" class="form-horizontal" onsubmit="return false;">
<div class="control-group">
<label class="control-label" for="modal-profile-name">Name</label>
<div class="controls">
<input type="text" id="modal-profile-name" name="modal-profile-name" value="John Doe">
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-profile-gender">Gender</label>
<div class="controls">
<select id="modal-profile-gender" name="modal-profile-name">
<option value="m">Male</option>
<option value="f">Female</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-profile-birthdate">Birthdate</label>
<div class="controls">
<div class="input-append">
<input type="text" id="modal-profile-birthdate" name="modal-profile-birthdate" class="input-small input-datepicker">
<span class="add-on"><i class="icon-calendar"></i></span>
</div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-profile-skills">Skills</label>
<div class="controls">
<select id="modal-profile-skills" name="modal-profile-skills" class="select-chosen chzn-done" multiple="" style="display: none;">
<option value="html" selected="">html</option>
<option value="css" selected="">css</option>
<option value="javascript">javascript</option>
<option value="php">php</option>
<option value="mysql">mysql</option>
</select><div id="modal_profile_skills_chzn" class="chzn-container chzn-container-multi" style="width: 220px;" title=""><ul class="chzn-choices"><li class="search-choice" id="modal_profile_skills_chzn_c_0"><span>html</span><a href="javascript:void(0)" class="search-choice-close" rel="0"></a></li><li class="search-choice" id="modal_profile_skills_chzn_c_1"><span>css</span><a href="javascript:void(0)" class="search-choice-close" rel="1"></a></li><li class="search-field"><input type="text" value="Select Some Options" class="" autocomplete="off" style="width: 25px;"></li></ul><div class="chzn-drop" style="left: -9000px; width: 218px; top: 0px;"><ul class="chzn-results"><li id="modal_profile_skills_chzn_o_0" class="result-selected" style="">html</li><li id="modal_profile_skills_chzn_o_1" class="result-selected" style="">css</li><li id="modal_profile_skills_chzn_o_2" class="active-result" style="">javascript</li><li id="modal_profile_skills_chzn_o_3" class="active-result" style="">php</li><li id="modal_profile_skills_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="modal-profile-bio">Bio</label>
<div class="controls">
<textarea id="modal-profile-bio" name="modal-profile-bio" class="textarea-elastic" rows="3" style="overflow: hidden; height: 60px;">Bio Information..</textarea>
<div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(204, 204, 204); font-weight: 400; width: 192px; font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; line-height: 20px; font-size: 14px; padding: 4px 6px;">Bio Information..&nbsp;</div></div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-success" data-dismiss="modal"><i class="icon-save"></i> Save</button>
</div>
</div>
