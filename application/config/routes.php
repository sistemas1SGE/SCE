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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 * Permisos de validacion en la sesion
 */
$route['default_controller'] = 'Login/in';

/*
 * 
 */
$route['Sign-in']   = 'Login/in';
$route['Sign-out']  = 'Login/out';

//
$route['Actividad-info'] = 'web/Actividad/get';
$route['Actividad-form/(:num)'] = 'web/Actividad/set/$1';
$route['Actividad-proc'] = 'web/Actividad/pro';
//
$route['Inscripcion-info'] = 'web/Inscripcion/get';
$route['Inscripcion-form/(:num)'] = 'web/Inscripcion/set/$1';
$route['Inscripcion-proc'] = 'web/Inscripcion/pro';
//
$route['Maestro-info'] = 'web/Maestro/get';
$route['Maestro-form/(:num)'] = 'web/Maestro/set/$1';
$route['Maestro-proc'] = 'web/Maestro/pro';
//
$route['Calificacion-info'] = 'web/Calificacion/get';
$route['Calificacion-form/(:num)'] = 'web/Calificacion/set/$1';
$route['Calificacion-proc'] = 'web/Calificacion/pro';
//
$route['Materia-info'] = 'web/Materia/get';
$route['Materia-form/(:num)'] = 'web/Materia/set/$1';
$route['Materia-proc'] = 'web/Materia/pro';
//
$route['Grupo-info'] = 'web/Grupo/get';
$route['Grupo-form/(:num)'] = 'web/Grupo/set/$1';
$route['Grupo-proc'] = 'web/Grupo/pro';
//
$route['Administrativo-info'] = 'web/Administrativo/get';
$route['Administrativo-form/(:num)'] = 'web/Administrativo/set/$1';
$route['Administrativo-proc'] = 'web/Administrativo/pro';
//
$route['EstudianteTutor-info'] = 'web/EstudianteTutor/get';
$route['EstudianteTutor-form/(:num)'] = 'web/EstudianteTutor/set/$1';
$route['EstudianteTutor-proc'] = 'web/EstudianteTutor/pro';
//
$route['Rol-info'] = 'web/Rol/get';
$route['Rol-form/(:num)'] = 'web/Rol/set/$1';
$route['Rol-proc'] = 'web/Rol/pro';
//
$route['Objeto-info'] = 'web/Objeto/get';
$route['Objeto-form/(:num)'] = 'web/Objeto/set/$1';
$route['Objeto-proc'] = 'web/Objeto/pro';

/*
 * 
 */
$route['app'] = 'login';




