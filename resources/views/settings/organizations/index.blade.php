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
                                <div v-if="organizations.length === 0" class="alert alert-light text-center mb-0" role="alert">
                                    {{ __('You do not have any organization created.') }}
                                </div>
                                <ul v-if="organizations.length > 0" class="list-group">
                                    <li v-for="organization in organizations" class="list-group-item">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-light">
                                                {{ __('View') }}
                                            </button>
                                            <button type="button" class="btn btn-primary">
                                                {{ __('Settings') }}
                                            </button>
                                        </div>
                                        <h3>
                                            @{{ organization.name }}
                                        </h3>
                                        <p class="small mb-0">
                                            {{ __('You create this group at') }} @{{ organization.created_at }}
                                        </p>
                                        <p v-if="organization.created_at !== organization.updated_at" class="small mb-0">
                                            {{ __('Last update was') }} @{{ organization.updated_at }}
                                        </p>
                                    </li>
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
