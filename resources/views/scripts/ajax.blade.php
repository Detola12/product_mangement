<script type="text/javascript">

    $(document).ready(function(){

        var id = $('#option').val()
        var amount = $('#amount').val()
        $('#check').on('click', function (event){
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $.ajax({
                url:'{{ url('/fetch-data') }}/'+id+'/'+amount,
                method: 'POST',
                dataType: 'json',
                success: function (response){
                    responseData = response;
                    $('#cost').text(response.total);
                },
                error: function (error){
                    console.error('Error fetching data:', error);
                },

            })


        })
        $('#clear').on('click', function (event){
            event.preventDefault();
            $('#cost').text('0');

        })


    })

</script>
