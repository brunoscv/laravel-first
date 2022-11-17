<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
<script src="{{ asset('/js/custom-datepicker.js') }}"></script>

<script>

    $(function () {
        $('.date_calendar .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: true,
            calendarWeeks: true,
            autoclose: true,
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });

        $('.datepicker').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: true,
            calendarWeeks: true,
            autoclose: true,
            format: "dd/mm/yyyy hh:ii",
            language: "pt-BR"
        });
    });
</script>
