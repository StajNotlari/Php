$(document).ready (function()
{
    $(".js-switch").each(function()
    {
        new Switchery(this);
    })

    $("body").on("change", ".js-switch", function()
    {
        var $completed = $(this).prop("checked");
        var $url = $(this).data("url");

        $.post($url,{ completed : $completed},function() {});
    })
})

$(document).ready (function()
{
    $(".remove-btn").click(function(e){

        var $data_url = $(this).data("url");

        Swal.fire({
            title: 'Gerçekten silmek istiyor musun?',
            text: "Bu işlem geri alınamaz!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'İptal',
            confirmButtonText: 'Sil'

          }).then(function (result) {
            if (result.value) {
                Swal.fire(
                    'Silindi!',
                    'İşlem başarılı.',
                    'success'
                  )
                  setTimeout(function(){
                    window.location.href = $data_url;
                  }, 1000);
                
            }
          });
    })
})
