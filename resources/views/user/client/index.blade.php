<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />



    </head>
    <body>


                            <table id="myTable" class="display table  table-bordered m-0   table-hover results">
                                <thead>
                                    <tr>
                                        <th> name</th>
                                        <th >email</th>
                                        <th >bio</th>
                                        <th >image</th>
                                        <th >check consultants date </th>

                                    </tr>

                                </thead>
                                <tbody>


                                       @foreach($consultants as $consultant)
                                    <tr>


                                        <td>{{@$consultant->name}}</td>
                                          <td>{{@$consultant->email}}</td>
                                            <td>{{@$consultant->bio}}</td>


                                              <td><a href="{{url('uplodes/consultant')}}/{{$consultants->first()->image}}"> image link</a>

                                                <td><a href="{{url('show/consultant/date')}}/{{$consultants->first()->name}}"> check  date</a>

                                                </td>


  </tr>
   @endforeach



                                    </tbody>

                                  </table>



    </body>
</html>
