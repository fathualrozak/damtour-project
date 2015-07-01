@extends('layouts.dashboard')
@section('page_heading', $jamaah->firstname.' '.$jamaah->lastname)
@section('section')


       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0" >

            <div class="panel panel-primary">
                <div class="panel-heading">
                   <ul class="list-inline">
                     <li class="col-xs-12">
                       <span class="btn-group pull-right">
                        <a href="{{ route('jamaah.index') }}" class="btn btn-primary"><i class="fa fa-times"></i></a>
                       </span>
                       <h4>Profile</h4>
                     </li>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group pull-right">
                                <a href="{{ route('jamaah.edit', Hashids::encode($jamaah->id)) }}" class="btn btn-default">
                                    <i class="fa fa-edit fa-fw"></i> Edit Profile
                                </a>
                                <a href="#" class="btn btn-default"><i class="fa fa-print fa-fw"></i> Print</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            {!! Html::image('img/profile.jpg', 'Jamaah', ['class' => 'img-profile']) !!}
                            <hr>
                            <a href="#" class="btn btn-default btn-block">Data Booking</a><br>
                            <a href="#" class="btn btn-default btn-block">Riwayat Pembayaran</a><br>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                             <table class="table table-user-information">
                               <tbody>
                                 <tr>
                                   <td>Nama Lengkap :</td>
                                   <td>{{ $jamaah->firstname.' '.$jamaah->lastname }}</td>
                                 </tr>
                                 <tr>
                                   <td>Nomor {{ $properties['idcard_types'][$jamaah->idcard_type] }} :</td>
                                   <td>{{ $jamaah->idcard_number }}</td>
                                 </tr>
                                 <tr>
                                    <td>Nama Panggilan :</td>
                                    <td>{{ $jamaah->nickname }}</td>
                                  </tr>
                                 <tr>
                                   <td>Jenis Kelamin :</td>
                                   <td>{{ $properties['genders'][$jamaah->gender] }}</td>
                                 </tr>
                                 <tr>
                                   <td>Tempat, Tanggal Lahir</td>
                                   <td>{{ ucwords(strtolower($jamaah->birthplace)).', '.$jamaah->birthdate->format('d-m-Y') }} </td>
                                 </tr>
                                  <tr>
                                    <td>Telp / Handphone</td>
                                    <td>{{ $jamaah->contact }}</td>
                                  </tr>
                                  <tr>
                                    <td>Alamat</td>
                                    <td>
                                         {{ $jamaah->address->line1 }}<br>
                                         {{ $jamaah->address->line2 }}<br>
                                         {{ $jamaah->address->district->name }} - {{ $jamaah->address->city->name }}

                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:{{ $jamaah->email }}">{{ $jamaah->email }}</a></td>
                                  </tr>
                                  <tr>
                                    <td>Pekerjaan</td>
                                    <td>{{ $jamaah->profession }}</td>
                                  </tr>
                                  <tr>
                                    <td>Pendidikan</td>
                                    <td>{{ $properties['educations'][$jamaah->education] }}</td>
                                  </tr>
                                  <tr>
                                    <td>Pernah Umroh</td>
                                    <td>{!! $jamaah->has_umroh ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' !!}</td>
                                  </tr>
                                  <tr>
                                    <td>Pernah Haji</td>
                                    <td>{!! $jamaah->has_hajj ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' !!}</td>
                                  </tr>
                                  <tr>
                                    <td>Ukuran Baju</td>
                                    <td>{{ $properties['dress_sizes'][$jamaah->dress_size] }}</td>
                                  </tr>
                                  <tr>
                                    <td>Ahli Waris</td>
                                    <td>
                                        {!! $jamaah->heir ? $jamaah->heir->heir_firstname.' '.$jamaah->heir->heir_lastname : '<span class="label label-warning">Tidak ada</span>' !!}
                                        {!! $jamaah->heir ? '<span class="label label-primary">'.$jamaah->heir->relationship->name.'</span>' : '' !!}
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
         </div>

       </div>

@stop
