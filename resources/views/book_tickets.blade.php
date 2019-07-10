@extends('layout.master')
@section('content')
<div class="input-append date form_datetime">
    <input size="16" type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>
@endsection

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>  