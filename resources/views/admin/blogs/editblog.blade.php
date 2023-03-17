@extends('admin.layout.layout')

@section('icerik')
    <!-- İÇERİK BAŞLANGIÇ -->
    <div class="container-xl"></div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    @if(Session::has('basarimesaji'))
                        <div class="alert alert-success">
                            {{ Session::get('basarimesaji') }}
                        </div>
                    @endif
                    @if(Session::has('hatamesaji'))
                        <div class="alert alert-danger">
                            {{ Session::get('hatamesaji') }}
                        </div>
                    @endif
                    @if(isset($data) and !empty($data[0]))


                        <div class="card-header" style="border: none">
                            <h4 class="card-title">Sayfa Düzenle</h4>
                        </div>
                        <div class="card-tabs">
                            <!-- Cards navigation -->
                            <ul class="nav nav-tabs" style="background: white;border-left: 1px solid #e6e7e9;border-top: 1px solid #e6e7e9;border-right: 1px solid #e6e7e9;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                @foreach($data as $dil)
                                    <button style="margin: 10px;padding: 5px;border-radius: 5px;font-weight: 500;border: 1px solid #d5d5d5;background-color: rgb(229 229 229 / 45%);" class="tablink" onclick="openPage('{{$dil->dil}}', this, '#e5e5e5')" id="defaultOpen">{{$dil->dil}}</button>
                                @endforeach
                            </ul>
                            <form action="{{route('adminBlogsEditPost')}}" method="post" class="card" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">

                                        @foreach($data as $veri)
                                            <input name="id[]" type="hidden" value="{{$veri->id}}">
                                            <input type="hidden" name="dil[]" value="{{$veri->dil}}">
                                            <input type="hidden" name="diletiket[]" value="{{$veri->diletiket}}">
                                            <input type="hidden" name="blogid" value="{{$veri->blogid}}">
                                            <div id="{{$veri->dil}}" class="col-md-9 tabcontent">
                                                <div class="col-md-9 col-xl-12">
                                                    <div class="row">

                                                        <div class="col-md-6 col-lg-6 mb-3">
                                                            <label class="form-label">Başlık</label>
                                                            <input type="text" class="form-control" name="baslik[]" value="{{$veri->baslik}}"/>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 mb-3">
                                                            <label class="form-label">Kısa Açıklama</label>
                                                            <input type="text" class="form-control" name="kisaaciklama[]" value="{{$veri->kisaaciklama}}"/>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 mb-3">
                                                            <style>
                                                                .ck-editor__editable {
                                                                    min-height: 200px;
                                                                }
                                                            </style>
                                                            <label class="form-label">İçerik</label>
                                                            <textarea name="icerik[]" id="editor{{$veri->diletiket}}" cols="30" rows="10">{{$veri->icerik}}</textarea>
                                                            <script>
                                                                CKEDITOR.replace( 'editor{{$veri->diletiket}}' );
                                                            </script>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 mb-3">
                                                            <style>
                                                                .ck-editor__editable {
                                                                    min-height: 200px;
                                                                }
                                                            </style>
                                                            <label class="form-label">İçerik</label>
                                                            <textarea name="ozet[]" id="editor-2{{$veri->diletiket}}" cols="30" rows="10">{{$veri->ozet}}</textarea>
                                                            <script>
                                                                CKEDITOR.replace( 'editor-2{{$veri->diletiket}}' );
                                                            </script>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 mb-3">
                                                            <label class="form-label">SEO Başlık</label>
                                                            <input type="text" class="form-control" name="seobaslik[]" value="{{$veri->seobaslik}}"/>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 mb-3">
                                                            <label class="form-label">SEO Açıklama</label>
                                                            <input type="text" class="form-control" name="seoaciklama[]" value="{{$veri->seoaciklama}}"/>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="col">

                                            <div class="mt-3">
                                                <fieldset class="form-fieldset">
                                                    <div class="mb-3">
                                                        @if($data[0]['image'])
                                                            <img src="{{asset($data[0]['image'])}}" alt="{{asset($data[0]['baslik'])}}">
                                                            <small>Eğer yeni görsel iletmezseniz eski görsel ile devam edilecektir.</small>
                                                        @endif
                                                        <label for="formFile" class="form-label">Sayfa Görsel</label>
                                                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                                        <input type="hidden" class="form-control" name="oldimage" value="{{$data[0]['image']}}" id="inputGroupFile02">
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 mb-3">
                                                        <label class="form-label">Sıra</label>
                                                        <input type="text" class="form-control" name="sira" value="{{$data[0]['sira']}}"/>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Sitede gözüksün mü?</label>
                                                            @if($veri->durum==1)
                                                                <label class="switch">
                                                                    <input name="durum" type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            @else
                                                                <label class="switch">
                                                                    <input type="hidden" name="durum" value="2">
                                                                    <input name="durum" type="checkbox">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <button style="width: 100%;" type="submit" class="btn btn-block btn-success btn-lg"> Güncelle
                                                        <svg style="margin-left:5px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><circle cx="12" cy="14" r="2" /><polyline points="14 4 14 8 8 8 8 4" /></svg>  </button>
                                                </fieldset>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            @else

                            @endif
                        </div>
                </div>
            </div>
        </div>
        <!-- İÇERİK SONU -->
        <script>
            function openPage(pageName,elmnt,color) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].style.backgroundColor = "";
                }
                document.getElementById(pageName).style.display = "block";
                elmnt.style.backgroundColor = color;
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
@endsection
