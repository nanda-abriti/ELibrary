<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Dashboard and Welcome remaining
$route['welcome'] = 'Welcome/index';
$route['logout'] = 'Welcome/clogOut';
$route['faculty'] = 'Welcome/loginFaculty';

$route['dashboard'] = 'Dashboard/dashboardView';


$route['cp'] = 'Dashboard/changePasswordView';
$route['cpSubmit'] = 'Dashboard/changePasswordSubmit';

$route['projects'] = 'Project/Projects';
$route['movies'] = 'Movie/Movies';
$route['profile'] = 'Profile/profileView';

//Tutorial.php
$route['aptitude'] = 'Tutorial/Aptitude';
$route['cse'] = 'Tutorial/Gate_CSE';
$route['ce'] = 'Tutorial/Gate_CE';
$route['ece'] = 'Tutorial/Gate_ECE';
$route['me'] = 'Tutorial/Gate_ME';
$route['ee'] = 'Tutorial/Gate_EE';
$route['ae'] = 'Tutorial/Gate_AE';
$route['all'] = 'Tutorial/Gate_AllBranches';

$route['c'] = 'Tutorial/Languages_C';
$route['cpp'] = 'Tutorial/Languages_CPP';
$route['java'] = 'Tutorial/Languages_Java';
$route['php'] = 'Tutorial/Languages_PHP';
$route['python'] = 'Tutorial/Languages_Python';
$route['dbms'] = 'Tutorial/Languages_DBMS';


$route['algo'] = 'Tutorial/Technology_Algorithms';
$route['codeigniter'] = 'Tutorial/Technology_CodeIgniter';
$route['dataMining'] = 'Tutorial/Technology_DataMining';
$route['imageProcessing'] = 'Tutorial/Technology_ImageProcessing';
$route['linux'] = 'Tutorial/Technology_Linux';
$route['ml'] = 'Tutorial/Technology_MachineLearning';
$route['ai'] = 'Tutorial/Technology_ArtificialIntelligence';
$route['laravel'] = 'Tutorial/Technology_Laravel';

//Academic.php
$route['CE/assign'] = 'Academic/CE_assign';
$route['CSE/assign'] = 'Academic/CSE_assign';
$route['EE/assign'] = 'Academic/EE_assign';
$route['ECE/assign'] = 'Academic/ECE_assign';
$route['ME/assign'] = 'Academic/ME_assign';
$route['AE/assign'] = 'Academic/AE_assign';

$route['CE/nk'] = 'Academic/CE_NK';
$route['CSE/nk'] = 'Academic/CSE_NK';
$route['EE/nk'] = 'Academic/EE_NK';
$route['ECE/nk'] = 'Academic/ECE_NK';
$route['ME/nk'] = 'Academic/ME_NK';
$route['AE/nk'] = 'Academic/AE_NK';

$route['CE/notes'] = 'Academic/CE_Notes';
$route['CSE/notes'] = 'Academic/CSE_Notes';
$route['EE/notes'] = 'Academic/EE_Notes';
$route['ECE/notes'] = 'Academic/ECE_Notes';
$route['ME/notes'] = 'Academic/ME_Notes';
$route['AE/notes'] = 'Academic/AE_Notes';

$route['AE/exam'] = 'Academic/AE_Exam';
$route['CSE/exam'] = 'Academic/CSE_Exam';
$route['ME/exam'] = 'Academic/ME_Exam';
$route['EE/exam'] = 'Academic/EE_Exam';
$route['ECE/exam'] = 'Academic/ECE_Exam';
$route['CE/exam'] = 'Academic/CE_Exam';


//Motivational.php
$route['rdpd'] = 'Motivational/richDadPoorDad';
$route['rm'] = 'Motivational/rajyogMeditation';

//Adminpanel.php
$route['shortNews'] = 'Adminpanel/shortNewsView';
$route['shortNews/add'] = 'Adminpanel/shortNewsAdd';
$route['studentLogin'] = 'Adminpanel/LoggedInUsers';
$route['allStudentLogin'] = 'Adminpanel/LoggedInUsersAdmin';
$route['usersLogout'] = 'Adminpanel/logOutUsers';



$route['userTypeUpdateFaculty'] = 'Adminpanel/updateUserTypeFaculty';

$route['facultyLoggedIn'] = 'Adminpanel/loginReportFaculty';

$route['ViewFaculty'] = 'Adminpanel/facultyView';
$route['AllFaculty'] = 'Adminpanel/facultyViewAdmin';
$route['AddFaculty'] = 'Adminpanel/facultyAdd';
$route['deleteFaculty'] = 'Adminpanel/facultyDelete';
$route['facultySignUp'] = 'Adminpanel/facultyAddDb';
$route['ViewLoginFaculty'] = 'Adminpanel/loggedInFaculty';
$route['ViewLoginFacultyAll'] = 'Adminpanel/loggedInFacultyAdmin';
$route['facultyLogout'] = 'Adminpanel/logOutFaculty';

$route['approved'] = 'AdminPanel/approvedStudentsView';
$route['unapproved'] = 'AdminPanel/unApprovedStudentsView';
$route['studentApproval'] = 'AdminPanel/approvalOfStudent';
$route['studentUnapproval'] = 'AdminPanel/unApprovalOfStudent';
$route['deleteUnapprove'] = 'AdminPanel/studentDeleteUA';
$route['deleteApprove'] = 'AdminPanel/studentDeleteA';

// $route[''] = 'Adminpanel/shortNewsInsert';
// $route[''] = 'Adminpanel/shortNewsDelete';

$route['fullNews'] = 'Adminpanel/fullNewsView';
$route['fullNews/add'] = 'Adminpanel/fullNewsAdd';
// $route[''] = 'Adminpanel/fullNewsInsert';
// $route[''] = 'Adminpanel/fullNewsDelete';

//Superadmin
$route['userType'] = 'Superadmin/userTypeView';
$route['updateDepartment'] = 'Superadmin/updateUserDepartment';
$route['allLoggedin'] = 'Superadmin/loggedInUsersAdmin';
$route['usersLogoutSuper'] = 'Superadmin/logOutUsers';
$route['addUsersSuper'] = 'Superadmin/addUserForm';
$route['UserAdded'] = 'Superadmin/addUser';
$route['AdminCp'] = 'Superadmin/changePassword';
$route['approvedAll'] = 'Superadmin/approvedStudentsViewAdmin';
$route['unapprovedAll'] = 'Superadmin/unApprovedStudentsViewAdmin';
$route['userTypeUpdate'] = 'Superadmin/updateUserType';
$route['studentLoggedIn'] = 'Superadmin/loginReportStudent';
// $route['facultyuserType'] = 'Superadmin/userTypeFacultyView';

//Sidebar.php
$route['myPersonal']='Sidebar/viewPersonal';
$route['myData']='Sidebar/addPersonal';

//Fie
// $route['hodFile']='File/hod';
// $route['hodFile']='File/hod';