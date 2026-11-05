

 <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush"  id="career_application_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width='2%'>{{ __('#') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Whatsapp Number') }}</th>
                                    <th scope="col">{{ __('Year of passing') }}</th>
                                    <th scope="col">{{ __('Employer') }}</th>
                                    <th scope="col">{{ __('Name of educational institution') }}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($datas as $index=> $data)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->whatsapp_number}}</td>
                                <td>{{$data->year_of_passing}}</td>
                                <td>{{$data->employer}}</td>
                                <td>{{$data->name_of_educational_institution}}</td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
