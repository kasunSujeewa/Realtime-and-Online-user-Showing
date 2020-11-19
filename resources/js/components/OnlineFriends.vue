<template>
  <div class="online-friends">
    <h3>Online Users</h3>
    <ul>
      <li v-for="userOn in onlineUsers" :key="userOn.id">
        <div class="name">{{ userOn.name }}</div>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  data() {
    return {
      onlineUsers: [],
    };
  },
  mounted() {
    this.getOnlineUsers();
  },
  methods: {
    getOnlineUsers: function () {
      axios.get("/onlineUsers").then((response) => {
        this.onlineUsers = response.data.onlineFR;
      });
    },
  },
};
</script>
