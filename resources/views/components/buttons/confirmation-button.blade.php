        <button @click="openModal" {{$attributes->merge(["class"=>"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150  border border-transparent rounded-lg  hover:bg-red-700 focus:outline-none focus:shadow-outline-red"])}} type="button">
            {{$action_name}}
        </button>
