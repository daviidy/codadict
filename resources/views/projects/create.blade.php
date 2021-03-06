@extends('layouts.menu_user_default')
@section('title', 'Creer un projet')

@section('content')
<style media="screen">
.rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center
}

.rating>input {
  display: none
}

.rating>label {
  position: relative;
  width: 1em;
  font-size: 3vw;
  color: #FFD600;
  cursor: pointer
}

.rating>label::before {
  content: "\2605";
  position: absolute;
  opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
  opacity: 1 !important
}

.rating>input:checked~label:before {
  opacity: 1
}

.rating:hover>input:checked~label:before {
  opacity: 0.4
}
.main-section{
	margin:0 auto;
	padding: 20px;
	margin-top: 100px;
	background-color: #fff;
	box-shadow: 0px 0px 20px #c1c1c1;
}
.fileinput-remove,
.fileinput-upload{
	display: none;
}
label{text-transform: uppercase;}

@media only screen and (max-width: 650px) {
  .rating>label {
      position: relative;
      width: 3em;
      font-size: 6vw;
      color: #FFD600;
      cursor: pointer;
  }
}
</style>
@if(session('status'))
@include('includes.status')
@endif
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="card">

                                  <div class="card-body card-block">
                                      <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data" class="">
                                          @csrf

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="text-input" class=" form-control-label">1- Que voulez-vous exactement ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <select required name="category_id" id="select" class="form-control" required>
                                                      <option value="Landing Page">Landing Page</option>
                                                      <option value="Blog">Blog</option>
                                                      <option value="Boutique en ligne">Boutique en ligne</option>
                                                      <option value="App web">Application web</option>
                                                      <option value="App Android">Application Android</option>
                                                      <option value="App IOS">Application IOS</option>
                                                      <option value="résaux sociaux">Augmentation de votre presence sur les résaux sociaux</option>
                                                      <option value="learn web">Apprendre le developpement web</option>
                                                      <option value="Learn Android">Apprendre le developpement d'applications Android</option>
                                                      <option value="Learn">Apprendre à investir sur la publicité en ligne</option>
                                                      <option value="Trader">Trader sur le marché du FOREX</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="text-input" class=" form-control-label">2- Quel est votre nom complet ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="text" id="text-input" name="user_name" value="{{Auth::user()->name}}" class="form-control" required readonly>
                                              </div>

                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="text-input" class=" form-control-label">3- Quel est le nom de votre entreprise ? (facultatif)</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="text" id="text-input" name="user_company" value="{{Auth::user()->company}}" class="form-control">
                                              </div>

                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label class=" form-control-label">4- A quel point votre demande est-elle urgente ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <div class="form-check-inline form-check">
                                                    <div class="rating">
                                                      <input type="radio" name="urgency" value="5" id="5">
                                                      <label for="5">☆</label>
                                                      <input type="radio" name="urgency" value="4" id="4">
                                                      <label for="4">☆</label>
                                                      <input type="radio" name="urgency" value="3" id="3">
                                                      <label for="3">☆</label>
                                                      <input type="radio" name="urgency" value="2" id="2">
                                                      <label for="2">☆</label>
                                                      <input type="radio" name="urgency" value="1" id="1">
                                                      <label for="1">☆</label>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label class=" form-control-label">5- Quel est votre budget ? (en Euros)</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="number" id="text-input" name="price" value="" class="form-control" min="100">
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="date-input" class=" form-control-label">6- Quel est le délai pour votre projet (si vous voulez réaliser un projet) ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="date" id="date" name="deadline" placeholder="Le délai pour votre projet" class="form-control" required>
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">7- Quelle est votre meilleure adresse email?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="email" id="email-input" name="user_email" value="{{Auth::user()->email}}" class="form-control" readonly required>
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">8- Enfin, quel est votre numéro de téléphone ? (Whatsapp de préférence)</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="number" id="phone" name="user_phone" value="{{Auth::user()->phone}}" class="form-control" required {{Auth::user()->phone ? 'readonly' : ''}}>
                                              </div>
                                          </div>

                                          <input hidden type="text" name="user_id" value="{{Auth::user()->id}}" class="form-control" required>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">9- Document</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <div class="file-loading">
                                                  <input id="file-1" name="input2[]" type="file" multiple class="file" data-overwrite-initial="false" >
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">10- Description</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="hidden" name="description">
                                                  <div class="" id="editorInformation" style="height: 300px;"></div>
                                              </div>
                                          </div>
                                          <div class="card-footer">
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                  <i class="far fa-paper-plane"></i> Envoyer
                                              </button>

                                          </div>
                                      </form>
                                  </div>

                              </div>

                          </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


    <script>
        var quillComment = new Quill('#editorInformation', {
        modules: {
            toolbar: [
            ['bold', 'italic'],
            ['link','align'],
            ]
        },
        placeholder: 'Ajouter votre commentaire...',
        theme: 'snow'
        });

        //a la sumissio  du formulmaire ob recupêre
        //le contenu de la div qui a le texte riche
        //et on met ce contenu dans l'input hidden
        var form = document.getElementById('information-container');
        form.onsubmit = function() {
          // Populate hidden form on submit
          var text = document.querySelector('input[name=description]');
          text.value = quillComment.root.innerHTML;

        //   console.log("Submitted", $(form).serialize(), $(form).serializeArray());

          // No back end to actually submit to!
        //   alert('Open the console to see the submit data!')
          return true;
        };
      </script>

      <script src="/plugin/build/js/intlTelInput.js"></script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {

            autoPlaceholder: "polite",

             hiddenInput: "mobile_tel",

             nationalMode: true,

             preferredCountries: ["ci", "fr"],
             separateDialCode: true,
            utilsScript: "/plugin/build/js/utils.js",
          });
        </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif','pdf'],
        overwriteInitial: false,
        maxFileSize:2000,
        /*maxFilesNum: 10,*/
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });

    });
    </script>
  @endsection
