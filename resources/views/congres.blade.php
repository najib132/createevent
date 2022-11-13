@extends('masters.Layouts')
@extends('masters.side')

@section('title')
    Congres-data
@endsection
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data of congres</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>lieux</th>
                                <th>site-web</th>
                                <th>perefix</th>
                                <th>deadline</th>
                                <!--<th>created_at</th>-->
                                <th>Hébergement</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>configuration</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($congres as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->date_debut }}</td>
                                <td>{{ $item->date_fin }}</td>
                                <td>{{ $item->lieux }}</td>
                                <td>{{ $item->siteweb }}</td>
                                <td>{{ $item->perefix }}</td>
                                <td>{{ $item->deadline }}</td>
                                <!--<td> //$item->created_at </td>-->
                                <td>
                                    <a href="{{route('hebergementadmin', $item->id) }}" class="btn btn-success btn-sm">Hébergement</a>
                                </td>
        
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>

                                <td>
                                    <a href="{{route('congres.configevent', $item->id) }}" class="btn btn-success btn-sm">Configuration</a>
                                </td>

                                <td>
                                    <a href="{{route('userBundel/usercongres', $item->id)}}" class="btn btn-warning btn-sm">URL</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
