let sl_nom_empleado = $("#em_empleado_id");
let sl_em_cuenta_bancaria = $("#em_cuenta_bancaria_id");

sl_nom_empleado.change(function(){
    let selected = $(this).find('option:selected');
    let em_empleado_id = $(this).val();

    let url = get_url("em_cuenta_bancaria","get_cuentas_bancarias", {em_empleado_id: em_empleado_id});

    get_data(url, function (data) {
        sl_em_cuenta_bancaria.empty();

        integra_new_option(sl_em_cuenta_bancaria,'Seleccione una cuenta','-1');

        $.each(data.registros, function( index, em_cuenta_bancaria ) {
            integra_new_option(sl_em_cuenta_bancaria,em_cuenta_bancaria.bn_banco_descripcion_select+' '+
                em_cuenta_bancaria.em_cuenta_bancaria_num_cuenta,em_cuenta_bancaria.em_cuenta_bancaria_id);
        });

        sl_em_cuenta_bancaria.selectpicker('refresh');
    });
});

