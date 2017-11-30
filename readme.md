<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Aplicación Equipos Médidos

### Apps

+ *Guzzlehttp*
+ *Datatables*
+ *Carbon*: Manejo de fechas 

### Modelos
+ Company
+ Criticality
+ Equipment
+ Location
+ Maintenance
+ Name
+ Pavilion
+ Periodicity
+ Purchase
+ Record
+ Replacement
+ Service
+ Staff
+ State
+ Type
+ Form

### Las Tablas

+ 1 Criticidad -> criticalities
+ 2 Historial -> records
+ 3 Mantención -> maintenances
+ 4 Empresas -> companies
+ 5 Equipos -> equipments
+ 6 Nombres -> names
+ 7 Pabellón -> pavilions
+ 8 Usuario  -> staffs
+ 9 Ubicación -> locations
+ 10 Servicio -> services
+ 11 Adquisición -> purchases
+ 12 Repuesto -> replacements
+ 13 Estado -> states
+ 14 Periodicidad -> periodicities
+ 15 Tipo -> types
+ 16 Formulario -> forms

### Tablas de Unión
+ criticality_equipment
+ company_maintenance
+ company_equipment
+ equipment_name
+ equipment_state
+ equipment_maintenance
+ equipment_periodicity
+ equipment_service
+ equipment_purchase
+ equipment_staff
+ equipment_record
+ location_service
+ maintenance_replacement
+ maintenance_type
+ maintenance_periodicity
+ pavilion_staff