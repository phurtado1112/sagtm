<script src="<?php echo base_url() ?>public/js/jquery.js"></script>
<script src="<?php echo base_url() ?>public/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $("#datepicker").datepicker({dateFormat: "dd-mm-yy"});
        $("#datepicker1").datepicker({dateFormat: "dd-mm-yy"});
    });
</script>
<hr>
<div class="navbar navbar-default navbar-fixed-bottom text-center">
    <footer class="footer">
        <p>
            &COPY; <?= date('Y'); ?> <a href="www.phdsystems.com">PHD Systems</a>
            <br>
            <small><?= date('d / m / Y'); ?></small>
        </p>
    </footer>
</div>
</body>
</html>

