@extends('layout')
@section('contenido')


<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {
    $('#example').DataTable();
} );
		</script>
		
<fieldset>
<legend>Reservas</legend>
<script type="text/javascript">
              $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeIn(2500); },0000); });
              $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeOut(2500); },5000); });
            </script>
         <?php if (Session::has('mensaje2')):
            ?>
                  <div class="mensajewarning alert alert-danger" ><label><?php echo Session::get('mensaje2');?></label></div>
         <?php endif;?>
         <?php if (Session::has('mensaje')):
            ?>
                  <div class="mensajewarning alert alert-info"><label><?php echo Session::get('mensaje');?></label></div>
         <?php endif;?>

<br/><br/>
<div style="width:85%; margin-left:5%; ">
<table id="example" class="table table-hover table-bordered">
	<thead>
		<tr class="danger">
      <th>Fecha de reserva</th>
			<th>Hora de reserva</th>
			<th>Paciente</th>
      <th>Evaluacion</th>
      <th>Medico asignado</th>
		</tr>
	</thead>
	
	<tbody style="font-size:14px;">
		 <?php if(count($reservas)>0):?>
      <tr>
        <?php  
          foreach ($reservas as $reserva):
          ?>
            <th><?php echo $reserva->FEC_RES;?></th>
            <th><?php echo $reserva->HOR_RES;?></th>
            <th><?php echo $reserva->NOM_PAC.' '.$reserva->APA_PAC.' '.$reserva->AMA_PAC; ?></th>
            <th><?php echo $reserva->EVA_TIC; ?></th>
            <th><?php echo $reserva->NOM_USU.' '.$reserva->APA_USU.' '.$reserva->AMA_USU;?></th>
            
    </tr>
        <?php endforeach; endif;?>
		
	</tbody>
</table>
</div>




@stop