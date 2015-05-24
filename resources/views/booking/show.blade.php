@extends('layouts.dashboard')
@section('page_heading','Booking')

    @section('section')

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                   <ul class="list-inline">
                     <li class="col-xs-12">
                       <span class="btn-group pull-right">

                       </span>
                       <h4>{{ $booking->program->service->name }} | {{ $jamaah->firstname.' '.$jamaah->lastname }}</h4>
                     </li>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class=" col-md-6 col-lg-6 ">
                         <table class="table table-user-information">
                           <tbody>
                             <tr>
                               <td><h4>Kode Booking :</h4></td>
                               <td><h4><code>{{ chunk_split($booking->code, 4) }}</code></h4></td>
                             </tr>
                             <tr>
                               <td>Tanggal Booking :</td>
                               <td>{{ $booking->date->format('d-m-Y') }}</td>
                             </tr>
                              <tr>
                                <td>Program</td>
                                <td><strong>{{ $booking->program->name }}</strong></td>
                              </tr>
                              @if($booking->program->programCategory->id == 2)
                               <tr>
                                <td>Jadwal</td>
                                <td>{{ $booking->program->schedule->format('d-M-Y') }}</td>
                               </tr>
                               <tr>
                                <td>Lama Hari</td>
                                <td>{{ $booking->program->days_length.' Hari' }}</td>
                               </tr>
                              @endif
                              <tr>
                                <td>Harga</td>
                                <td>{{ formatCurrency($booking->program->currency->name, $booking->program->price) }}</td>
                              </tr>
                              @if($items->count())
                                <td>Layanan lain</td>
                                <td>
                                    @foreach($items as $item)
                                          {{ $item->name }} - <i>{{ formatCurrency($item->currency->name,$item->price) }}</i><br>
                                    @endforeach
                                </td>
                              @endif
                               @if($booking->program->programCategory->id == 2)
                               <tr>
                                  <td>Batas Pelunasan</td>
                                  <td>{{ $booking->program->payment_before->format('d-m-Y') }}</td>
                               </tr>
                               @endif
                            </tbody>
                          </table>
                    </div>
                    <div class=" col-md-6 col-lg-6 ">
                         <table class="table table-user-information">
                           <tbody>
                             <tr>
                               <td>Nama Lengkap :</td>
                               <td>{{ $jamaah->firstname.' '.$jamaah->lastname }}</td>
                             </tr>
                             <tr>
                               <td>Jenis Kelamin :</td>
                               <td>{{ $properties['genders'][$jamaah->gender] }}</td>
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
                              </tr><tr>
                                <td></td>
                                <td>
                                     <a href="{{ route('jamaah.show', Hashids::encode($jamaah->id)) }}" class="btn btn-default pull-right"><i class="fa fa-edit"></i> Profile Lengkap</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i> Pembayaran</a>
                        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Persyaratan</a>
                        <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i> Jaringan</a>
                        <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Perlengkapan</a>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('booking.index') }}" class="btn btn-primary pull-right"> List Booking</a>
                    <div class="clearfix"></div>
                </div>
            </div>
       </div>

    @endsection

@stop