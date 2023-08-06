<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="th" xml:lang="th">

<head>
  <meta charset="utf-8" />
  <title>Osotspa Social</title>

  @component('site.components.inc-script')
  @endcomponent

  <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/social.css')}}">

</head>

<body>
  <div class="bgSocial page1">

    @component('site.components.inc-header')
    @endcomponent

    <div class="sec01">
      <div class="sp-container">

        <h1 class="boxTextHeader page1 textHeader w text-center text-uppercase">Project <br>สินค้า</h1>

      </div>
    </div>

  </div>

  <div class="sec02">
    <div class="sp-container">

      <h2 class="textHeader w mb-5">สินค้า</h2>
      <div class="container-sm">
        <div class="row g-5" id="row">

        </div>
      </div>

    </div>
  </div>

  </div>
  <script>
    get()

    function get() {
      let web = $('[name="server"]').val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: 'GET',
        url: web + '/b',
        datatype: 'json',
        success: function(result) {
          console.log(result[0])
          // console.log(result[0][0].id)
          html = ''
          result[0].forEach(value => {
            console.log(value.name)
            html += `
                <div class="col-lg-4 d-flex align-self-stretch justify-content-md-center">
                <a href="{{ url('social') }}/health-well-being-consumers" class="boxSocial">
                  <img src="{{asset('assets/site/img/social/page1/${value.image}.${value.file}')}}" class="img-fluid">
                  <h4 class="textPage1 text-uppercase mt-3 mb-3">${value.name}<br>จำนวน ${value.number} ชิ้น</h4>
                  <p class="textBody textGray">${value.detail}</p>
                  <h4 class="textPage1 text-uppercase mt-3 mb-3">ราคา ${value.price} บาท</h4>
                </a>
              </div>
                `
          });
          $('#row').html(html)
        },
        error: function(error) {
          console.log(error);
        }
      });
    }
  </script>

  @component('site.components.inc-footer')
  @endcomponent

</body>

</html>