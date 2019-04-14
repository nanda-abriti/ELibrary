<script>
    $(document).ready(function() {
        $('#selectedstate').change(function() {
            var stateid = $(this).val();
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>Welcome/showCity',
                data: {id: stateid},
                async: false,
                dataType: 'html',
                success: function(html){
                    $('#selectedcity').html(html);
                },
                error: function(){
                    alert('data not found');
                }
            });
        });

        $('#selectedcity').change(function() {
            var cityid = $(this).val();
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>Welcome/showArea',
                data: {id: cityid},
                async: false,
                dataType: 'html',
                success: function(html){
                    $('#selectedarea').html(html);
                },
                error: function(){
                    alert('data not found');
                }
            });
           alert(stateid);
        });
    });
</script>