<?php $myrand = rand();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="th" xml:lang="th">
<head>
	<meta charset="utf-8" />

	  @component('site.components.inc-script')
      @endcomponent

   <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/social.css') }}">


</head>

<body>

    @component('site.components.inc-header')
    @endcomponent

<div class="bgSocial">

  <div class="sp-container">

  <div class="d-flex justify-content-start pt-5 mb-5">
  <a href="./" class="textNav active">Admin <svg xmlns="http://www.w3.org/2000/svg" style=" margin-top:-4px;" width="20" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></a> 
		<div class="textNav">รายการ user</div>
	</div>

  <div class="pt-5">
    <h1 class="text-center textHeader text-uppercase">Admin</h1>
	<div class="underLine" style="border-bottom:0;"></div>

  

  </div>
  
  </div>


    <div class="occSec13">
      <div class="container-lg">

        <div class="d-flex justify-content-lg-between mb-3">
          <h4 class="textH3 textBule a">User Name</h4>
          <h4 class="textH3 textBule a">Product Name</h4>
          <h4 class="textH3 textBule a">Image</h4>
          <h4 class="textH3 textBule a">Action</h4>
        </div>
        
        <div class="p1" id="p1"></div>     

        <div class="underLine occ a mt-5 mb-5"></div>

      </div>
    </div>



  </div>

    @component('site.components.inc-footer')
    @endcomponent

</body>
</html>
<script>
    // GetAction_plan()
    GetAction_plan()
  function GetAction_plan(){
          let web = $('[name="server"]').val();
          // let order_by = $('[name="order_by"]').val();
          let limit_data = $('[name="limit_data"]').val();
          let type = 'consumer_health';
          let category = 'social';
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
          type: 'GET',
          url: web + '/b',
          datatype: 'json',
          data: {
              category,
              // order_by,
              type,
              // limit_data
          },
          success: function(result) { 
              console.log(result)
              let results = result[0]
              console.log(results)
              html_3 = ''
              results.forEach(value => {
              console.log(value)
                      // if(value.type == 'consumer_health') <a href="{{ asset('uploads/${value.file_name}') }}" target="_blank">
                          html_3 += `
                          
                            <div class="d-lg-flex justify-content-lg-between align-items-lg-center mt-2">
                              <div class="textBody textBule">${value.name}</div>
                              <div class="textBody textBule">${value.product_name}</div>
                              <img src="{{asset('assets/site/img/social/page1/${value.image}.${value.file}')}}" class="img-fluid" style="width: 120px;">
                              
                               <div class="boxBtnDownload">
                               <form class="row g-3" style="margin: 2% 4%">
                                <input type="hidden" name="ids" value="${value.id}">
                                        <button type="button" class="btn text-white"
                                            style="margin-right: 2%;width: 150px;background-color: rgb(252, 38, 6);"
                                            onclick="deletes()">Delete</button>
                                </div>
                            </form>
                                </div>
                              </div>
                            </div>
                            `
                        });
                $('#p1').html(html_3)
               
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    
    </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function deletes() {
    let web = $('[name="server"]').val();
    let id = $('[name="ids"]').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: web + '/d',
        datatype: 'json',
        data: {
            id
        },
        success: function(result) { 
            console.log(result)
            console.log(result[0])
            if(result.status == 'success')
            location.href = './' + result.link;
        },
        error: function(error) {
            console.log(error);
            // console.log(data)
        }
    });
}
</script>