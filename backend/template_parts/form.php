<form action="./rC.php" method="POST" class="form-convertion">
    <div align="center">
        <br>
        <h4 class="m0">Llámanos con un clic</h4>
        <a class="m0" href="tel:3136511039">
            <!-- <img src="/img/phone-new.svg" alt="" class="middle" width="20px"> -->
            3136511039</a>
        <br>
        <h4 class="m0"> déjanos contactarte</h4>
        <br>
    </div>
    <input type="text" name="nombre" placeholder="Nombre completo" required="">

    <input type="tel" name="celular" placeholder="Celular" required="">

    <input type="text" name="correo" placeholder="Correo" required="">

    <!-- The second value will be selected initially -->
    <select name="tipo_consulta" class="input border-one p-1 rounded" id="servicio">
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


    <textarea name="mensaje" placeholder="Mensaje"></textarea>

    <div class="g-recaptcha" data-sitekey="6LfOF7MUAAAAAGxjlpZERwnUN6kaO_kt8MnlYnZK"></div>

    <div style="margin-top: 10px;" align="right">
        <small><a href="/politicas" target="_blank" rel="noopener noreferrer">Politicas de privacidad</a></small> &nbsp;
        <button type="submit" class="submit"> <img src="/public/img/send.svg" class="middle" width="15px"> Enviar
            datos</button>

    </div>
</form>