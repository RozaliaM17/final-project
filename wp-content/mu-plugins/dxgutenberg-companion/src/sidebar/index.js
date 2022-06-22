import { registerPlugin } from "@wordpress/plugins";

import { LayoutPicker, icon } from "./layout-picker";

export const setupSidebar = () => {
	registerPlugin("layout-picker", {
		icon: icon,
		render: LayoutPicker,
	});
};
