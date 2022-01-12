@extends('app')

@section('breadcrumbs.items')
	<div class="breadcrumb breadcrumb--active">{{ trans('labels.categories.plural') }}</div>
@endsection

@section('breadcrumbs.actions')
	<toggle>
		<template v-slot="{ isOn, setTo }">
			<a class="button button--success" href="#" @click.prevent="setTo(true)">
				<font-awesome-icon icon="plus" class="mr-2"></font-awesome-icon> {{ trans('labels.categories.add_button') }}
			</a>

			<modal :value="isOn" @input="setTo(false)">
				@include('category.modals.create')
			</modal>
		</template>
	</toggle>
@endsection

@section('content')
	<div class="bg-white rounded-sm shadow">
		@foreach ($categories as $category)
			<a href="{{ route('categories.show', $category->id) }}" class="block hover:bg-gray-100 border-b p-6">
				<h4 class="flex justify-between text-2xl">
					{{ $category->label }}
					<span>
						<formatter-currency 
							:amount="{{ $category->budgeted - $category->monthspent }}">
						</formatter-currency>
						Remaining
					</span>

				</h4>

				<div class="py-2">
					<progress-bar
						:achieved="{{ $category->progress > 0 && $category->monthspent <= $category->budgeted ? 'true' : 'false' }}"
						:balance="{{ $category->monthspent }}"
						:progress="{{ round($category->monthspent / $category->budgeted * 100,0) }}"
					></progress-bar>
				</div>

				<div class="flex justify-between">
					<p>
						<formatter-currency :amount="{{ $category->monthspent }}"></formatter-currency> spent
					</p>

					<p>
						<formatter-currency :amount="{{ $category->budgeted }}"></formatter-currency>
						budgeted
					</p>
				</div>
			</a>
		@endforeach
	</div>
@endsection
