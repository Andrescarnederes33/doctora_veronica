<form action="/send.php" method="POST">
    <div align="center">
        <h4 class="m0"> Déjame contactarte</h4>
    </div>
    <hr style="border: 0;border-bottom: 1px solid #ddd;">
    <br>
    <div class="input-field col s6">
          <input id="name" type="text" class="validate" required>
          <label for="name">Nombre completo</label>
    </div>

    <div class="input-field col s6">
          <input id="tel" type="tel" class="validate" required>
          <!-- <input type="tel" name="celular" placeholder="Celular" required=""> -->
          <label for="tel">Celular</label>
    </div>
    

    <div class="input-field col s6">
        <input id="email" type="tel" class="validate" required>
          <label for="email">Correo</label>
    </div>
    <!-- The second value will be selected initially -->
     <div>
    <select>
    <option value="Consulta Ginecológica">Consulta Ginecológica</option>
        <option value="Consulta Obstetricia y control prenatal">Consulta Obstetricia y control
            prenatal</option>
        <option value="Anticoncepción familiar" selected="">Anticoncepción familiar</option>
        <option value="Ginecología Láser">Ginecología Láser</option>
        <option value="Menopausia">Menopausia</option>
        <!--5-->
        <option value="Atrofia Genital">Atrofia Genital</option>
        <option value="Incontinencia Urinaria">Incontinencia Urinaria</option>
        <option value="Lesiones de VPH">Lesiones de VPH</option>
        <option value="Tensado Vaginal">Tensado Vaginal</option>
        <option value="Labioplastia">Labioplastia</option>
        <option value="Blanqueamiento genital">Blanqueamiento genital</option>
        <option value="Perineoplastia">Perinoplastia</option>
        <option value="Rejuvchip">Rejuv chip</option>
        <option value="Ácido Hialurónico">Ácido Hialurónico</option>
        <option value="Sin motivo de la consulta">Motivo de la consulta</option>
    </select>
    <!-- <label>Materialize Select</label> -->
  </div>

  <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
    <!-- <textarea name="mensaje" placeholder="Mensaje"></textarea> -->

    <div class="g-recaptcha" data-sitekey="6LfOF7MUAAAAAGxjlpZERwnUN6kaO_kt8MnlYnZK"></div>

    <div style="margin-top: 10px;" align="right">
        <span><a href="/politicas" target="_blank" rel="noopener noreferrer nofollow">Politicas de privacidad</a></span>
         &nbsp;
        <button type="submit" class="waves-effect waves-light btn-large"> 
            <!-- <img src="/public/img/send.svg" class="middle" width="15px"> -->
            Enviar datos
        </button>

    </div>
</form>