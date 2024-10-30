@props(['job'])
<x-panel class="flex gap-x-6">
  <div>
    <x-employer-logo :employer="$job->employer"/>
  </div>
<!-- Div for job cards -->
<!--class self-start not working , look for alternative to make Employer name on top left corner -->
    <div class="flex-1 flex flex-col">
      <a href="#" class="self-start text-sm text-grey-700 transition-colors duration-300">{{ $job->employer->name }}</a>
      
          <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
                    <a href="{{ $job->url }}" target="_blank">
                    {{ $job -> title }}
                  </a>
                  </h3>
          <p class="test-sm text-grey-600 mt-auto">{{ $job-> salary }}</p>
      
    </div>
   <!--div for tags -->
      <div>
        @foreach($job->tags as $tag)
        <x-tag :$tag />
        @endforeach
      </div>
        
</x-panel>