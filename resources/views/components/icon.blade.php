@props(['name'])

@if ($name === 'down-arrow')
	<svg {{ $attributes(['class' => 'transform -rotate-90']) }} height="22" viewBox="0 0 22 22" width="22">
	    <g fill-rule="evenodd" fill="none">
			{{-- <path d="M21 1v20.16H.84V1z" stroke-opacity=".012" stroke-width=".5" stroke="#9d174d"></path> --}}
			<path d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z" fill="#9d174d" stroke="#9d174d"></path>
		</g>
	</svg>
@endif
