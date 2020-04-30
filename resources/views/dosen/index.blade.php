@extends('layout/app')

@section('title','Data Dosen')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Data Dosen</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @foreach( $dosen as $dosen )
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"> 
                    <tr>
                    <td>{{ $dosen->nama }}</td>
                    <td>
                    <a href="/dosen/{{ $dosen->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                </li>
            </ul>
        </tbody>
    </table>
    @endforeach
            
        

            <a href="/dosen/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection
   