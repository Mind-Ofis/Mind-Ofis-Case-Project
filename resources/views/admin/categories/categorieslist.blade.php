@extends('admin.layout.layout')

@section('icerik')
    <!-- İÇERİK BAŞLANGIÇ -->
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({
                "language":{
                    "url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
                }
            });
        });
    </script>

    <div class="container-xl">
    </div>
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
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
            </div>
            @if($data=="0")
                <div class="empty">
                    <p class="empty-title">Henüz Kategori eklenmemiş.</p>
                    <p class="empty-subtitle text-muted">
                        Hemen yeni bir kategori ekle.
                    </p>
                    <div class="empty-action">
                        <a href="{{route('adminAddCat')}}" class="btn btn-success">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <i class="bi bi-tags-fill" id="headericon"></i>
                            Yeni Kategori EKle
                        </a>
                    </div>
                </div>
            @else
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kategoriler</h3>
                            <a href="{{route('adminAddCat')}}"><button style="position: absolute;right:15px;top:15px;" class="btn btn-sm btn-success">Yeni Kategori EKle</button></a>
                        </div>
                        <!-- DATATABLES BAŞI -->
                        <div style="padding: 10px;" class="table-responsive">


                            <table id="datatables" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th style="width: 80px;">Top Cat</th>
                                    <th>Görsel</th>
                                    <th style="width: 500px">Başlık</th>
                                    <th>Tarih</th>
                                    <th>Durum</th>
                                    <th style="width: 70px">İşlem</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $veri)
                                        <tr>
                                            <td style="text-align: center;">
                                                @if(!empty($veri->topcatid))
                                                    @php
                                                    $ustkat=\App\Models\siteCategoires::where([['catid','=',$veri->topcatid],['diletiket','=','tr']])->first();
                                                    @endphp
                                                    @if(isset($ustkat->baslik))
                                                        {{$ustkat->baslik}}
                                                    @else
                                                        #
                                                    @endif
                                                @else
                                                    #
                                                @endif
                                            </td>
                                            <td style="width:50px;width:50px;">@if($veri->image)<img src="{{asset($veri->image)}}" alt="{{$veri->baslik}}">@else <span class="badge "> Resim yok</span> @endif</td>
                                            <td>{{$veri->baslik}}</td>
                                            <td>{{$veri->created_at }}</td>
                                            <td>
                                                @if($veri->durum==1)
                                                    <label class="switch">
                                                        <input onchange="window.location='{{ route('adminCatdurumEdit',['id'=>$veri->catid]) }}'" type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                @else
                                                    <label class="switch">
                                                        <input onchange="window.location='{{ route('adminCatdurumEdit',['id'=>$veri->catid]) }}'" type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('adminCatEdit',['id'=>$veri->catid])}}"><button class="btn btn-sm btn-light" style="width: 100%;margin-bottom: 5px">Düzenle</button></a>
                                                <br>
                                                <a href="{{route('adminCatDel',['id'=>$veri->catid])}}"><button class="btn btn-sm btn-light" style="width: 100%">Sil</button></a>
                                            </td>
                                        </tr>

                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sıra</th>
                                    <th>Slider</th>
                                    <th>Başlık</th>
                                    <th>Durum</th>
                                    <th>Tarih</th>
                                    <th style="width: 70px">İşlem</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- DATATABLES SONU -->
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!-- İÇERİK SONU -->
@endsection
