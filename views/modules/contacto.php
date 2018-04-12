<div id="main" class="container">
  <div class="row">
    <div class="12u">
      <div id="bar">
        <h2>Contactanos</h2>
        <p>Puedes contactarnos llenando el siguiente formulario con tus datos</p>
      </div>
    </div>
  </div>
  <div class="row">
     <div class="12u">
       <div id="content">
         <div class="row">
           <div class="12u">
             <section>
               <h2>Envíanos un correo</h2>
               <p>Para poder brindarte una atención más personalizada, llena correctamente todos los campos del formulario.</p>
             </section>
           </div>
         </div>
         <div class="row">
           <div class="6u 12u(mobile)">
             <form method="post">
         			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">

               <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto:" value="">

         			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">

         			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>
         			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
               <?php
                 $contacto = new ControllerContacto();
                 $contacto -> ctr_enviar_correo();
               ?>
         		</form>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
