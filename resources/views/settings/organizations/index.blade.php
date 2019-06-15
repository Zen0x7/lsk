@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('settings.sidebar')
            <div class="col-md-9">
                <h3 class="pb-2 border-bottom">{{ __('Organizations') }}</h3>
                <div class="card mb-4">
                    <div class="card-header">
                        {{ __('Create an organization') }}
                    </div>
                    <div class="card-body">
                        <create-organization inline-template>
                            <div>
                                <form name="createOrganization" @submit.prevent="store">
                                    <div class="form-group mt-2">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input type="text"
                                               :class="{'is-invalid': errors.has('name') }"
                                               v-validate="'required'"
                                               class="form-control"
                                               id="name"
                                               name="name"
                                               v-model="name">
                                        <div v-if="errors.has('name')"
                                             class="invalid-feedback">
                                            @{{ errors.first('name') }}
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" @click="store">{{ __('Create') }}</button>
                                </form>
                            </div>
                        </create-organization>
                    </div>
                </div>

                <!-- start: view-organizations -->
                <div class="card">
                    <div class="card-header">
                        {{ __('Your organizations') }}
                    </div>
                    <div class="card-body">
                        <index-organizations inline-template>
                            <div>
                                <ul>
                                    <li v-for="organizations in organization">@{{ organization.name }}</li>
                                </ul>
                            </div>
                        </index-organizations>
                    </div>
                </div>
                <!-- end: view-organizations -->
            </div>
        </div>
    </div>
@endsection
