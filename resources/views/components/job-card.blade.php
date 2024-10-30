 @props(['job'])
 <x-panel class="flex flex-col text-center">
          <!-- Div for job cards -->
              <!--class self-start not working , look for alternative to make Employer name on top left corner -->
              <div class="self-start text-sm">{{ $job->employer->name }}</div>
              <div class="py-8">
                  <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
                    <a href="{{ $job->url }}" target="_blank">
                    {{ $job -> title }}
                  </a>
                  </h3>
                  <p class="text-sm mt-4">{{ $job->salary }}</p>
              </div>
              <div class="flex justify-between items-center mt-atuo">
                <!--div for tags -->
                <div>
                  @foreach($job->tags as $tag)
                  <x-tag :$tag size="small"></x-tag>
                  @endforeach
                </div>

                  <x-employer-logo :employer="$job->employer" :width="42"/>
              </div>
          
  </x-panel>