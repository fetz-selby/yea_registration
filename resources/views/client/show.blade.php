<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        {{-- <title>YEA-{{ Auth::guard('artisan')->user()->registration_code }}-registration-reciept</title> --}}

        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
        <link
            href="{{ asset('css/registration-details-style.css') }}"
            rel="stylesheet"
        />
    </head>

    <body onload="window.print()">
        <page size="A4">
            <header>
                <h1> REGISTRATION DETAILS</h1>
            </header>
            <article>
                <table cellpadding="0" cellspacing="0" class="meta borderless">
                    <tbody>
    
                        <td colspan="2" nowrap="nowrap">
                            <div class="mx-auto" align="center"><img height="50px" width="150px" src="{{ asset('logo.png') }}" ></div>
                        </td>
                        {{-- <td colspan="2" nowrap="nowrap">
                            <div align="left">
                                {{-- {!! QrCode::size(100)->generate($client->registration_code) !!} --}}
                            </div>
                        </td>     
                    </tbody>
                </table>
                <div class="row">

                </div>
                {{-- <table class="photo">
                    <tbody>
                        <td nowrap="nowrap">
                            <div align="right"><img src="{{ $client->getFirstMediaUrl('photo') }}" border="0" style="display:block;visibility:visible;" width="151" height="151"></div>
                        </td>
                    </tbody>
                </table> --}}

                <table class="address  borderless">
                    <tbody>
                        <tr>
                            <th>REGISTRATION ID :</th>
                            <td><h2>{{ $client->registration_code }}</h2></td>
                        </tr>
                    </tbody>
                </table>
                <table class="address  borderless">
                    <tbody>
                        <tr>
                            <th>Module :</th>
                            <td><h2>{{ $client->module }}</h2></td>
                        </tr>
                    </tbody>
                </table>
                <table class="meta borderless ">
                    <tbody>
  
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Surname:</th>
                                        <td>
                                            {{ $client->last_name }}
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>First Name:</th>
                                    <td>
                                        {{ $client->first_name }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Other Names:</th>
                                    <td>
                                        {{ $client->other_name }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Ghana Card number:</th>
                                    <td>
                                        {{ $client->ghana_card }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>
                                   <th>Date of Birth:</th>
                                    <td>
                                        {{ $client->date_of_birth }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th> Email :</th>
                                    <td>
                                        {{ $client->email }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Place of Residence :</th>
                                    <td>
                                        {{ $client->residential_address }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Community :</th>
                                    <td>
                                        {{ $client->community }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>GPS Address:</th>
                                    <td>
                                        {{ $client->gps_address }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Region :</th>
                                    <td>
                                        {{ $client->region }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>District :</th>
                                    <td>
                                        {{ $client->district }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>Next of Kin :</th>
                                    <td>
                                        {{ $client->next_of_kin }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th> Next of kin Phone Number :</th>
                                    <td>
                                        {{ $client->next_of_kin_phone_number }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th> Momo Network:</th>
                                    <td>
                                        {{ $client->next_of_kin_phone_number }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th> Momo Number :</th>
                                    <td>
                                        {{ $client->next_of_kin_phone_number }}
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                        <table class="digital borderless ">
                            <tbody>
                                <tr>
                                    <th>Have you worked as a CPA with YEA before? :</th>
                                    <td>
                                        {{ $client->module_question }}
                                    </td>
                                    
                                </tr>
                               
                            </tbody>
                        </table>
                        <table class="digital borderless ">
                            <tbody>
                                <tr>    
                                    <th>YEA number :</th>
                                    <td>
                                        {{ $client->module_number }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>   

    

                        <table class="digital borderless ">
                            <tbody>
                                <tr>
                                    <th>Educational Level :</th>
                                    <td>
                                        {{ $client->level_of_education }}
                                    </td>
                                </tr>
                            </tbody>
        
    

                        </table>
                    </tbody>
                </table>
            </article>
            <aside>
                <h1>&nbsp;</h1>
            </aside>
        </page>
    
    </body>
    

</html>
