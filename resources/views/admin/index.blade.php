@extends('layouts.app-nice')

@section('content')
    <div class="table-responsive-md">
        <table
            class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption class="text-end">Created by Muhammad Farhan Al-Ghifari</caption>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @for ($i = 0; $i < 10; $i++)
                    <tr class="table-primary">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                @endfor

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
@endsection
