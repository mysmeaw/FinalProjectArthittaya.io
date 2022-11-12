<template>
  <div>
    <h1>{{ msg }}</h1>
    <h2>
      <button type="submit" class="btn btn-primary" onclick="window.location.href='#/empview'">Go</button>
    </h2>

  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: ' Welcome to Starship entertainment'
    }
  }
}
</script>

