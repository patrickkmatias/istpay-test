import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

const vitePort = 5173;

/**
 * Checks if any GitPod/Codespaces environment variable
 * is present and returns its Vite port URL; otherwise
 * returns null.
 *
 * @returns GitPod/Codespaces URL | null
 */
const getCloudEnv = () => {
    const {
        GITPOD_WORKSPACE_URL,
        CODESPACE_NAME,
        GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN,
    } = process.env;
    if (GITPOD_WORKSPACE_URL) {
        return `${vitePort}-${GITPOD_WORKSPACE_URL.substring(
            "https://".length
        )}`;
    } else if (CODESPACE_NAME) {
        return `${CODESPACE_NAME}-${vitePort}.${GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}`;
    }
    return null;
};

const server = getCloudEnv()
    ? {
          port: vitePort,
          host: "0.0.0.0",
          hmr: {
              host: getCloudEnv(),
              clientPort: 443,
              protocol: 'wss'
          },
      }
    : undefined;

export default defineConfig({
    plugins: [
        laravel({
            input: "resources/js/app.js",
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server,
});