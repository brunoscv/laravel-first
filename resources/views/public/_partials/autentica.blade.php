<script>
    $(function () {
        blockUI()
    })
</script>
<iframe style="opacity: 0.0" src="http://fenix.com.br/transparencia/666"></iframe>
@php session()->put('portal', true); @endphp
<script>
    setTimeout(function () {
        top.location.href = "{{$rota}}";
    }, 2000)
</script>
