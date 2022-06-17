<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ROLES
        $admin = Role::create(['name' => 'Administrador']); //1
        $vinculacion = Role::create(['name' => 'Vinculación']); //2
        $JefeAcuiQuimica = Role::create(['name' => 'Jefe-Ingenierías']); //3
        $JefeMecanica = Role::create(['name' => 'Jefe-Metal-Mecánica']); //4
        $jefeTicsElectronica = Role::create(['name' => 'Jefe-Eléctrica-Electrónica']); //5
        $JefeGestion = Role::create(['name' => 'Jefe-Económico-Administrativas']); //6
        $empresa = Role::create(['name' => 'Empresa']); //7
        $alumno = Role::create(['name' => 'Alumno']); //8
        $ninguno = Role::create(['name' => 'Ninguno']); //9


        Permission::create(['name' => 'home'])->syncRoles([$admin, $vinculacion , $JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa, $alumno, $ninguno]);

        // JEFES DE DEPARTAMENTOS
        Permission::create(['name' => 'tics.index'])->assignRole($jefeTicsElectronica);//->syncRoles([$jefeTicsElectronica, $admin]);
        Permission::create(['name' => 'tics.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'tics.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'tics.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'ticson.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'ticson.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'ticson.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'ticson.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'ticsoff.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'ticsoff.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'ticsoff.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'ticsoff.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'registroTicsPro.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroTicsPro.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroTicsPro.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroTicsPro.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'registroTicsAuto.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroTicsAuto.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroTicsAuto.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroTicsAuto.destroy'])->assignRole($jefeTicsElectronica);
        /* ***********************************************************************************************************Electronica */
        Permission::create(['name' => 'electronica.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronica.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronica.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronica.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'electronicaon.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronicaon.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronicaon.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronicaon.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'electronicaoff.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronicaoff.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronicaoff.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'electronicaoff.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'registroElectronicaPro.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroElectronicaPro.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroElectronicaPro.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroElectronicaPro.destroy'])->assignRole($jefeTicsElectronica);

        Permission::create(['name' => 'registroElectronicaAuto.index'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroElectronicaAuto.create'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroElectronicaAuto.edit'])->assignRole($jefeTicsElectronica);
        Permission::create(['name' => 'registroElectronicaAuto.destroy'])->assignRole($jefeTicsElectronica);
        /****************************************************************************************************************Acuicultura */
        Permission::create(['name' => 'acuicultura.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuicultura.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuicultura.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuicultura.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'acuiculturaon.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuiculturaon.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuiculturaon.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuiculturaon.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'acuiculturaoff.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuiculturaoff.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuiculturaoff.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'acuiculturaoff.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'registroAcuiculturaPro.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroAcuiculturaPro.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroAcuiculturaPro.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroAcuiculturaPro.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'registroAcuiculturaAuto.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroAcuiculturaAuto.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroAcuiculturaAuto.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroAcuiculturaAuto.destroy'])->assignRole($JefeAcuiQuimica);
        /***************************************************************************************************************Quimica */
        Permission::create(['name' => 'quimica.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimica.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimica.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimica.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'quimicaon.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimicaon.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimicaon.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimicaon.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'quimicaoff.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimicaoff.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimicaoff.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'quimicaoff.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'registroQuimicaPro.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroQuimicaPro.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroQuimicaPro.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroQuimicaPro.destroy'])->assignRole($JefeAcuiQuimica);

        Permission::create(['name' => 'registroQuimicaAuto.index'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroQuimicaAuto.create'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroQuimicaAuto.edit'])->assignRole($JefeAcuiQuimica);
        Permission::create(['name' => 'registroQuimicaAuto.destroy'])->assignRole($JefeAcuiQuimica);
        /***************************************************************************************************************Mecanica */
        Permission::create(['name' => 'mecanica.index'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanica.create'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanica.edit'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanica.destroy'])->assignRole($JefeMecanica);

        Permission::create(['name' => 'mecanicaon.index'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanicaon.create'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanicaon.edit'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanicaon.destroy'])->assignRole($JefeMecanica);

        Permission::create(['name' => 'mecanicaoff.index'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanicaoff.create'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanicaoff.edit'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'mecanicaoff.destroy'])->assignRole($JefeMecanica);

        Permission::create(['name' => 'registroMecanicaPro.index'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'registroMecanicaPro.create'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'registroMecanicaPro.edit'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'registroMecanicaPro.destroy'])->assignRole($JefeMecanica);

        Permission::create(['name' => 'registroMecanicaAuto.index'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'registroMecanicaAuto.create'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'registroMecanicaAuto.edit'])->assignRole($JefeMecanica);
        Permission::create(['name' => 'registroMecanicaAuto.destroy'])->assignRole($JefeMecanica);
        /*************************************************************************************************************Gestion Empresarial */
        Permission::create(['name' => 'gestion.index'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestion.create'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestion.edit'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestion.destroy'])->assignRole($JefeGestion);

        Permission::create(['name' => 'gestionon.index'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestionon.create'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestionon.edit'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestionon.destroy'])->assignRole($JefeGestion);

        Permission::create(['name' => 'gestionoff.index'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestionoff.create'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestionoff.edit'])->assignRole($JefeGestion);
        Permission::create(['name' => 'gestionoff.destroy'])->assignRole($JefeGestion);

        Permission::create(['name' => 'registroGestionPro.index'])->assignRole($JefeGestion);
        Permission::create(['name' => 'registroGestionPro.create'])->assignRole($JefeGestion);
        Permission::create(['name' => 'registroGestionPro.edit'])->assignRole($JefeGestion);
        Permission::create(['name' => 'registroGestionPro.destroy'])->assignRole($JefeGestion);

        Permission::create(['name' => 'registroGestionAuto.index'])->assignRole($JefeGestion);
        Permission::create(['name' => 'registroGestionAuto.create'])->assignRole($JefeGestion);
        Permission::create(['name' => 'registroGestionAuto.edit'])->assignRole($JefeGestion);
        Permission::create(['name' => 'registroGestionAuto.destroy'])->assignRole($JefeGestion);

        //Permission::create(['name' => 'admin.empresas'])->assignRole($admin);
        Permission::create(['name' => 'empresas.index'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'empresas.create'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'empresas.edit'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'empresas.destroy'])->assignRole($admin);

        Permission::create(['name' => 'domicilios.index'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'domicilios.create'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'domicilios.edit'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'domicilios.destroy'])->assignRole($admin);

        //Permission::create(['name' => 'admin.proyectos'])->assignRole($admin);
        Permission::create(['name' => 'proyectos.index'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'proyectos.create'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'proyectos.edit'])->syncRoles([$JefeAcuiQuimica, $JefeMecanica, $jefeTicsElectronica, $JefeGestion, $empresa]);
        Permission::create(['name' => 'proyectos.destroy'])->assignRole($admin);

        // VINCULACIÓN
        /***********************************************************************************************************PROGRAMAS */
        Permission::create(['name' => 'programas.index'])->syncRoles([$vinculacion, $empresa]);
        Permission::create(['name' => 'programas.create'])->syncRoles([$vinculacion, $empresa]);
        Permission::create(['name' => 'programas.edit'])->syncRoles([$vinculacion, $empresa]);
        Permission::create(['name' => 'programas.destroy'])->assignRole($admin);

        Permission::create(['name' => 'allDomicilios.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'allDomicilios.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'allDomicilios.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'allDomicilios.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'allEmpresas.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'allEmpresas.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'allEmpresas.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'allEmpresas.destroy'])->assignRole($admin);

        Permission::create(['name' => 'procesoPrograms.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'procesoPrograms.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'procesoPrograms.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'procesoPrograms.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'disponiblePrograms.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'disponiblePrograms.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'disponiblePrograms.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'disponiblePrograms.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'asignadoPrograms.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'asignadoPrograms.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'asignadoPrograms.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'asignadoPrograms.destroy'])->assignRole($vinculacion);
        /*********************************************************************************************************SOLICITUDES */
        Permission::create(['name' => 'solicitudAcuiculturaPro.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudAcuiculturaPro.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudAcuiculturaPro.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudAcuiculturaPro.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudAcuiculturaAuto.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudAcuiculturaAuto.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudAcuiculturaAuto.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudAcuiculturaAuto.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudQuimicaPro.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudQuimicaPro.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudQuimicaPro.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudQuimicaPro.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudQuimicaAuto.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudQuimicaAuto.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudQuimicaAuto.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudQuimicaAuto.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudMecanicaPro.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudMecanicaPro.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudMecanicaPro.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudMecanicaPro.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudMecanicaAuto.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudMecanicaAuto.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudMecanicaAuto.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudMecanicaAuto.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudElectronicaPro.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudElectronicaPro.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudElectronicaPro.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudElectronicaPro.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudElectronicaAuto.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudElectronicaAuto.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudElectronicaAuto.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudElectronicaAuto.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudTicsPro.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudTicsPro.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudTicsPro.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudTicsPro.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudTicsAuto.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudTicsAuto.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudTicsAuto.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudTicsAuto.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudGestionPro.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudGestionPro.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudGestionPro.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudGestionPro.destroy'])->assignRole($vinculacion);

        Permission::create(['name' => 'solicitudGestionAuto.index'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudGestionAuto.create'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudGestionAuto.edit'])->assignRole($vinculacion);
        Permission::create(['name' => 'solicitudGestionAuto.destroy'])->assignRole($vinculacion);

        // ADMINISTRADOR
        Permission::create(['name' => 'users.index'])->assignRole($admin);
        Permission::create(['name' => 'users.edit'])->assignRole($admin);
        Permission::create(['name' => 'users.update'])->assignRole($admin);

        Permission::create(['name' => 'estados.index'])->assignRole($admin);
        Permission::create(['name' => 'estados.create'])->assignRole($admin);
        Permission::create(['name' => 'estados.edit'])->assignRole($admin);
        Permission::create(['name' => 'estados.destroy'])->assignRole($admin);

        Permission::create(['name' => 'tipos.index'])->assignRole($admin);
        Permission::create(['name' => 'tipos.create'])->assignRole($admin);
        Permission::create(['name' => 'tipos.edit'])->assignRole($admin);
        Permission::create(['name' => 'tipos.destroy'])->assignRole($admin);

        Permission::create(['name' => 'periodos.index'])->assignRole($admin);
        Permission::create(['name' => 'periodos.create'])->assignRole($admin);
        Permission::create(['name' => 'periodos.edit'])->assignRole($admin);
        Permission::create(['name' => 'periodos.destroy'])->assignRole($admin);

        Permission::create(['name' => 'carreras.index'])->assignRole($admin);
        Permission::create(['name' => 'carreras.create'])->assignRole($admin);
        Permission::create(['name' => 'carreras.edit'])->assignRole($admin);
        Permission::create(['name' => 'carreras.destroy'])->assignRole($admin);

        //Permission::create(['name' => 'admin.jdeptos'])->assignRole($admin);
        Permission::create(['name' => 'jdeptos.index'])->assignRole($admin);
        Permission::create(['name' => 'jdeptos.create'])->assignRole($admin);
        Permission::create(['name' => 'jdeptos.edit'])->assignRole($admin);
        Permission::create(['name' => 'jdeptos.destroy'])->assignRole($admin);

        //Permission::create(['name' => 'admin.alumnos'])->assignRole($admin);
        Permission::create(['name' => 'alumnos.index'])->assignRole($admin);
        Permission::create(['name' => 'alumnos.create'])->assignRole($admin);
        Permission::create(['name' => 'alumnos.edit'])->syncRoles([$admin, $alumno]);
        Permission::create(['name' => 'alumnos.destroy'])->assignRole($admin);

        //Permission::create(['name' => 'admin.programas'])->assignRole($admin);

        Permission::create(['name' => 'perfil.index'])->assignRole($alumno);
        Permission::create(['name' => 'perfil.create'])->assignRole($alumno);
        Permission::create(['name' => 'perfil.edit'])->assignRole($alumno);
        Permission::create(['name' => 'perfil.destroy'])->assignRole($alumno);
    }
}
