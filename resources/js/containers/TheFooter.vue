<template>
  <CFooter :fixed="false">
    <div>
      <a href="https://endlesscodestudio.com" target="_blank">EndlessCodeStudio</a>
      <span class="ml-1">&copy; {{new Date().getFullYear()}}.</span>
    </div>
    <div class="ml-auto">
      <span class="mr-1">Powered by</span>
      <a href="https://endlesscodestudio.com/e-hut" target="_blank">EndlessCodeStudio</a>
    </div>
  </CFooter>
</template>

<script>
export default {
  name: 'TheFooter'
}
</script>
