$(function () {
    console.log('ready running on publication');
});


function download_document(id, filename)
{
    $.ajax({
        url: $('#baseL').val()+'document/download',
        type: "get",
        data: {
          id: id
        },
        beforeSend: function(){
            block_page('Data sedang di proses . . ');
        },
        success: function(response) {
            let resp = JSON.parse(response);
            $.unblockUI();
            if (resp.data !== undefined) {
                // console.log('sukses');
                var element = document.createElement('a');
                element.setAttribute('href', resp.data);
                element.setAttribute('download', filename+'.'+resp.extension);

                element.style.display = 'none';
                document.body.appendChild(element);

                element.click();

                document.body.removeChild(element);
            }else{
                pops_timer('error', 'Kesalahan', 'Terjadi kesalahan saat mengambil data', null);
            }
        },
        error: function(xhr) {
            $.unblockUI();
            pops_timer('error', 'Kesalahan', 'Terjadi kesalahan saat mengambil data', null);
          //Do Something to handle error
        }
      });
}
