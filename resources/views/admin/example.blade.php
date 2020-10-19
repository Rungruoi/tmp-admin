@extends('layouts.admin')
@section('page_title' , 'Profile')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid form-intervale-top">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile"
                        id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label"></div>
                            <div class="kt-portlet__head-toolbar">
                                <a href="#" class="btn btn-clean kt-margin-r-10">
                                    <i class="la la-arrow-left"></i>
                                    <span class="kt-hidden-mobile">Back</span>
                                </a>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-brand">
                                        <i class="la la-check"></i>
                                        <span class="kt-hidden-mobile">Save</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Form-->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    @component('components.text_input',
                                [
                                    'name' => 'first_name',
                                    'label' => __('common.first_name'),
                                    'attributes' => [
                                        'required' => true,
                                        'class' => 'form-control',
                                        'placeholder' => __('page.manager.form.placeholder.first_name')
                                    ]
                                ]
                                ) @endcomponent
                                </div>
                                <div class="form-group">
                                    @component('components.text_input',
                                [
                                    'name' => 'last_name',
                                    'label' => __('common.last_name'),
                                    'attributes' => [
                                        'required' => true,
                                        'class' => 'form-control',
                                        'placeholder' => __('page.manager.form.placeholder.last_name')
                                    ]
                                ]
                                ) @endcomponent
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <div>
                                        <label for="avatar" class="col-form-label">Avatar</label>
                                    </div>
                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                         id="kt_user_edit_avatar">
                                        <div class="kt-avatar__holder" id="avatar-preview-image"
                                             style="background-image: url(https://app-management-hoosier-dev.s3.ap-southeast-1.amazonaws.com/managers/1594969708_b2.png); background-size: 100% 100%;"></div>
                                        <label class="kt-avatar__upload " data-toggle="kt-tooltip" title=""
                                               data-original-title="Thay đổi">
                                            <i class="fa fa-pen" style="margin-left: 30px"></i>
                                            <input accept="image/*" id="avatar" class="form-control upload_image"
                                                   data-category-upload="avatar" data-insert-field="avatar"
                                                   name="upload_file" type="file">
                                            <input type="hidden" name="avatar" value="">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    @component('components.text_input',
                                [
                                    'name' => 'email',
                                    'label' => __('common.email'),
                                    'attributes' => [
                                        'class' => 'form-control',
                                        'required' => true,
                                        'placeholder' => __('page.manager.form.placeholder.email')
                                    ],
                                ]
                                ) @endcomponent
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    @component('components.text_input',
                                [
                                    'name' => 'id_card_number',
                                    'label' => __('common.identity_card_number'),
                                    'attributes' => [
                                        'class' => 'form-control',
                                        'placeholder' => __('common.form.placeholder.identity_card_number')
                                    ]
                                ]
                                ) @endcomponent
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    @component('components.text_input',
                                [
                                    'name' => 'address',
                                    'label' => __('common.address'),
                                    'attributes' => [
                                        'class' => 'form-control',
                                        'placeholder' => __('page.manager.form.placeholder.address')
                                    ]
                                ]
                                ) @endcomponent
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    @component('components.text_input',
                                [
                                    'name' => 'birthday',
                                    'label' => __('common.birthday'),
                                    'value' => null,
                                    'attributes' => [
                                        'class' => 'form-control datepicker-input',
                                        'placeholder' => __('page.manager.form.placeholder.birthday')
                                    ]
                                ]
                                ) @endcomponent
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    @component('components.radio_input', ['name' => 'gender', 'label' => __('common.gender'), 'options' => ['male', 'female', 'Other']]) @endcomponent
                                </div>
                            </div>
                            </div>
                    </div>
                </form>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>

@endsection
