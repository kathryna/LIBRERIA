<?php

use codeigniter\Model;
class PersonModel extends Model {
  protected $table='estudiantes';
  protected $primaryKey= 'Codigo-Cedula';
  protected $allowedFields= {'nombre', 'apellido','contraseña'};



  }






























 ?>
