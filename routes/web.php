<?php

use App\Http\Controllers\AcuiasignadoController;
use App\Http\Controllers\AcuidisponibleController;
use App\Http\Controllers\AcuiprocesoController;
use App\Http\Controllers\TicsprocesoController;
use App\Http\Controllers\TicsdisponibleController;
use App\Http\Controllers\TicsasignadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\JdeptoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\SolicitudProyectoController;
use App\Http\Controllers\SolicitudProgramaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AllasignadoController;
use App\Http\Controllers\AlldisponibleController;
use App\Http\Controllers\AlldomiciliosController;
use App\Http\Controllers\AllempresasController;
use App\Http\Controllers\AllprocesoController;
use App\Http\Controllers\ElectroasignadoController;
use App\Http\Controllers\ElectroprocesoController;
use App\Http\Controllers\ElectrodisponibleController;
use App\Http\Controllers\GestionasignadoController;
use App\Http\Controllers\GestiondisponibleController;
use App\Http\Controllers\GestionprocesoController;
use App\Http\Controllers\MecaniasignadoController;
use App\Http\Controllers\MecanidisponibleController;
use App\Http\Controllers\MecaniprocesoController;
use App\Http\Controllers\PerfilalumnoController;
use App\Http\Controllers\QuimiasignadoController;
use App\Http\Controllers\QuimidisponibleController;
use App\Http\Controllers\QuimiprocesoController;
use App\Http\Controllers\RegistroAacuiculturaController;
use App\Http\Controllers\RegistroAelectronicaController;
use App\Http\Controllers\RegistroAgestionController;
use App\Http\Controllers\RegistroAmecanicaController;
use App\Http\Controllers\RegistroAquimicaController;
use App\Http\Controllers\RegistroAticsController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RegistroPacuiculturaController;
use App\Http\Controllers\RegistroPelectronicaController;
use App\Http\Controllers\RegistroPgestionController;
use App\Http\Controllers\RegistroPmecanicaController;
use App\Http\Controllers\RegistroPquimicaController;
use App\Http\Controllers\RegistroPticsController;
use App\Http\Controllers\SolicitudAautorizadoController;
use App\Http\Controllers\SolicitudAprocesoController;
use App\Http\Controllers\SolicitudautorizadoController;
use App\Http\Controllers\SolicitudBautorizadoController;
use App\Http\Controllers\SolicitudBprocesoController;
use App\Http\Controllers\SolicitudCautorizadoController;
use App\Http\Controllers\SolicitudCprocesoController;
use App\Http\Controllers\SolicitudEautorizadoController;
use App\Http\Controllers\SolicitudEprocesoController;
use App\Http\Controllers\SolicitudGautorizadoController;
use App\Http\Controllers\SolicitudGprocesoController;
use App\Http\Controllers\SolicitudprocesoController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/student', function () {
    return view('login/alu');
});

Route::get('/solicitudAcuiculturaAuto/pdf', [App\Http\Controllers\SolicitudautorizadoController::class, 'pdf'])->name('solicitudAcuiculturaAuto.pdf')->middleware('auth');
Route::get('/solicitudQuimicaAuto/pdf', [App\Http\Controllers\SolicitudAautorizadoController::class, 'pdf'])->name('solicitudQuimicaAuto.pdf')->middleware('auth');
Route::get('/solicitudMecanicaAuto/pdf', [App\Http\Controllers\SolicitudBautorizadoController::class, 'pdf'])->name('solicitudMecanicaAuto.pdf')->middleware('auth');
Route::get('/solicitudElectronicaAuto/pdf', [App\Http\Controllers\SolicitudCautorizadoController::class, 'pdf'])->name('solicitudElectronicaAuto.pdf')->middleware('auth');
Route::get('/solicitudTicsAuto/pdf', [App\Http\Controllers\SolicitudEautorizadoController::class, 'pdf'])->name('solicitudTicsAuto.pdf')->middleware('auth');
Route::get('/solicitudGestionAuto/pdf', [App\Http\Controllers\SolicitudGautorizadoController::class, 'pdf'])->name('solicitudGestionAuto.pdf')->middleware('auth');
Route::get('/allDomicilios/pdf', [App\Http\Controllers\AlldomiciliosController::class, 'pdf'])->name('allDomicilios.pdf')->middleware('auth');
Route::get('/allEmpresas/pdf', [App\Http\Controllers\AllempresasController::class, 'pdf'])->name('allEmpresas.pdf')->middleware('auth');

Route::get('/registroAcuiculturaAuto/pdf', [App\Http\Controllers\RegistroAacuiculturaController::class, 'pdf'])->name('registroAcuiculturaAuto.pdf')->middleware('auth');
Route::get('/registroQuimicaAuto/pdf', [App\Http\Controllers\RegistroAquimicaController::class, 'pdf'])->name('registroQuimicaAuto.pdf')->middleware('auth');
Route::get('/registroMecanicaAuto/pdf', [App\Http\Controllers\RegistroAmecanicaController::class, 'pdf'])->name('registroMecanicaAuto.pdf')->middleware('auth');
Route::get('/registroElectronicaAuto/pdf', [App\Http\Controllers\RegistroAelectronicaController::class, 'pdf'])->name('registroElectronicaAuto.pdf')->middleware('auth');
Route::get('/registroTicsAuto/pdf', [App\Http\Controllers\RegistroAticsController::class, 'pdf'])->name('registroTicsAuto.pdf')->middleware('auth');
Route::get('/registroGestionAuto/pdf', [App\Http\Controllers\RegistroAgestionController::class, 'pdf'])->name('registroGestionAuto.pdf')->middleware('auth');

Route::get('/acuicultura/pdf', [App\Http\Controllers\AcuiprocesoController::class, 'pdf'])->name('acuicultura.pdf')->middleware('auth');
Route::get('/acuiculturaon/pdf', [App\Http\Controllers\AcuidisponibleController::class, 'pdf'])->name('acuiculturaon.pdf')->middleware('auth');
Route::get('/acuiculturaoff/pdf', [App\Http\Controllers\AcuiasignadoController::class, 'pdf'])->name('acuiculturaoff.pdf')->middleware('auth');
Route::get('/quimica/pdf', [App\Http\Controllers\QuimiprocesoController::class, 'pdf'])->name('quimica.pdf')->middleware('auth');
Route::get('/quimicaon/pdf', [App\Http\Controllers\QuimidisponibleController::class, 'pdf'])->name('quimicaon.pdf')->middleware('auth');
Route::get('/quimicaoff/pdf', [App\Http\Controllers\QuimiasignadoController::class, 'pdf'])->name('quimicaoff.pdf')->middleware('auth');
Route::get('/mecanica/pdf', [App\Http\Controllers\MecaniprocesoController::class, 'pdf'])->name('mecanica.pdf')->middleware('auth');
Route::get('/mecanicaon/pdf', [App\Http\Controllers\MecanidisponibleController::class, 'pdf'])->name('mecanicaon.pdf')->middleware('auth');
Route::get('/mecanicaoff/pdf', [App\Http\Controllers\MecaniasignadoController::class, 'pdf'])->name('mecanicaoff.pdf')->middleware('auth');
Route::get('/electronica/pdf', [App\Http\Controllers\ElectroprocesoController::class, 'pdf'])->name('electronica.pdf')->middleware('auth');
Route::get('/electronicaon/pdf', [App\Http\Controllers\ElectrodisponibleController::class, 'pdf'])->name('electronicaon.pdf')->middleware('auth');
Route::get('/electronicaoff/pdf', [App\Http\Controllers\ElectroasignadoController::class, 'pdf'])->name('electronicaoff.pdf')->middleware('auth');
Route::get('/tics/pdf', [App\Http\Controllers\TicsprocesoController::class, 'pdf'])->name('tics.pdf')->middleware('auth');
Route::get('/ticson/pdf', [App\Http\Controllers\TicsdisponibleController::class, 'pdf'])->name('ticson.pdf')->middleware('auth');
Route::get('/ticsoff/pdf', [App\Http\Controllers\TicsasignadoController::class, 'pdf'])->name('ticsoff.pdf')->middleware('auth');
Route::get('/gestion/pdf', [App\Http\Controllers\GestionprocesoController::class, 'pdf'])->name('gestion.pdf')->middleware('auth');
Route::get('/gestionon/pdf', [App\Http\Controllers\GestiondisponibleController::class, 'pdf'])->name('gestionon.pdf')->middleware('auth');
Route::get('/gestionoff/pdf', [App\Http\Controllers\GestionasignadoController::class, 'pdf'])->name('gestionoff.pdf')->middleware('auth');

Route::get('/procesoPrograms/pdf', [App\Http\Controllers\AllprocesoController::class, 'pdf'])->name('procesoPrograms.pdf')->middleware('auth');
Route::get('/disponiblePrograms/pdf', [App\Http\Controllers\AlldisponibleController::class, 'pdf'])->name('disponiblePrograms.pdf')->middleware('auth');
Route::get('/asignadoPrograms/pdf', [App\Http\Controllers\AllasignadoController::class, 'pdf'])->name('asignadoPrograms.pdf')->middleware('auth');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->middleware('auth'); //Ruta Protegida
Route::resource('estados', EstadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('tipos', TipoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('periodos', PeriodoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('jdeptos', JdeptoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('carreras', CarreraController::class)->middleware('auth'); //Ruta Protegida
Route::resource('domicilios', DomicilioController::class)->middleware('auth'); //Ruta Protegida
Route::resource('empresas', EmpresaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('proyectos', ProyectoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('programas', ProgramaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('alumnos', AlumnoController::class)->middleware('auth'); //Ruta Protegida
/************************************************************************************************************* JEFES DE DEPARTAMENTO */
Route::resource('tics', TicsprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('ticson', TicsdisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('ticsoff', TicsasignadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('electronica', ElectroprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('electronicaon', ElectrodisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('electronicaoff', ElectroasignadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('acuicultura', AcuiprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('acuiculturaon', AcuidisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('acuiculturaoff', AcuiasignadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('quimica', QuimiprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('quimicaon', QuimidisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('quimicaoff', QuimiasignadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('mecanica', MecaniprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('mecanicaon', MecanidisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('mecanicaoff', MecaniasignadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('gestion', GestionprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('gestionon', GestiondisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('gestionoff', GestionasignadoController::class)->middleware('auth'); //Ruta Protegida

Route::resource('registroAcuiculturaPro', RegistroPacuiculturaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroAcuiculturaAuto', RegistroAacuiculturaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroQuimicaPro', RegistroPquimicaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroQuimicaAuto', RegistroAquimicaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroMecanicaPro', RegistroPmecanicaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroMecanicaAuto', RegistroAmecanicaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroElectronicaPro', RegistroPelectronicaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroElectronicaAuto', RegistroAelectronicaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroTicsPro', RegistroPticsController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroTicsAuto', RegistroAticsController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroGestionPro', RegistroPgestionController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroGestionAuto', RegistroAgestionController::class)->middleware('auth'); //Ruta Protegida

/*******************************************************************************************************************VINCULACION */
Route::resource('solicitudAcuiculturaPro', SolicitudprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudAcuiculturaAuto', SolicitudautorizadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudQuimicaPro', SolicitudAprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudQuimicaAuto', SolicitudAautorizadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudMecanicaPro', SolicitudBprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudMecanicaAuto', SolicitudBautorizadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudElectronicaPro', SolicitudCprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudElectronicaAuto', SolicitudCautorizadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudTicsPro', SolicitudEprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudTicsAuto', SolicitudEautorizadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudGestionPro', SolicitudGprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudGestionAuto', SolicitudGautorizadoController::class)->middleware('auth'); //Ruta Protegida

Route::resource('procesoPrograms', AllprocesoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('disponiblePrograms', AlldisponibleController::class)->middleware('auth'); //Ruta Protegida
Route::resource('asignadoPrograms', AllasignadoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('allDomicilios', AlldomiciliosController::class)->middleware('auth'); //Ruta Protegida
Route::resource('allEmpresas', AllempresasController::class)->middleware('auth'); //Ruta Protegida
/************************************************************************************************************************ALUMNOS */
Route::resource('solicitudProyecto', SolicitudProyectoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('solicitudPrograma', SolicitudProgramaController::class)->middleware('auth'); //Ruta Protegida
Route::resource('perfil', PerfilalumnoController::class)->middleware('auth'); //Ruta Protegida
Route::resource('registroSolicitud', RegistroController::class)->middleware('auth'); //Ruta Protegida
/******************************************************************************************************************************* */

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'create'])->name('home2');
