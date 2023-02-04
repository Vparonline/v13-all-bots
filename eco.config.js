module.exports = {
  apps: [
    {
      name: "web",
      script: 'chavowinnie.js',
      watch: false,
      exec_mode: "cluster",
      max_memory_restart: "2G",
      cwd: "./sw/web"
    },
    {
      name: "stat",
      script: 'chavowinnie.js',
      watch: false,
      exec_mode: "cluster",
      max_memory_restart: "2G",
      cwd: "./sw/stat"
    },
    {
      name: "mod",
      script: 'chavowinnie.js',
      watch: false,
      exec_mode: "cluster",
      max_memory_restart: "2G",
      cwd: "./sw/mod"
    },
    {
      name: "ınvite",
      script: 'chavowinnie.js',
      watch: false,
      exec_mode: "cluster",
      max_memory_restart: "2G",
      cwd: "./sw/ınvite"
    }
  ]
};
