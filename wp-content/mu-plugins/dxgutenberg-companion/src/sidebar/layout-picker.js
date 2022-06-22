// Needed to register and showcase the Plugin we are creating here.
import { PluginSidebar, PluginSidebarMoreMenuItem } from "@wordpress/edit-post";

// A simple component to wrap content. We are styling this in the style.scss file.
import { __experimentalText as Text } from "@wordpress/components";

// Just the icon to showcase in the plugin picker.
import { more } from "@wordpress/icons";

// Access to the state management of Gutenberg.
// @see https://awhitepixel.com/blog/gutenberg-updating-withselect-and-withdispatch-into-react-hooks-useselect-and-usedispatch/
const { useSelect, useDispatch } = wp.data;

export const LayoutPicker = () => {
	// Get access to the page/post store data (meta) to red.
	// We use the state from postMeta.
	const { postMeta } = useSelect((select) => {
		return {
			postMeta: select("core/editor").getEditedPostAttribute("meta"),
		};
	});

	// Get access to a "write" function to store data in the meta.
	// The second pram are the dependencies. We need this, otherwise we risk infinite loop.
	// The property "dxgc_layout_picker" comes from the PHP register_meta definition of this plugin.
	const { editPost } = useDispatch("core/editor", [
		postMeta.dxgc_layout_picker,
	]);

	// A function that will handle writing to the store.
	const handleButtonSelect = (value) => {
		// With editPost, we write to our met store. We have access just for this plugin's dta
		// with the property key dxgc_layout_picker, set from the PHP register of the plugin.
		// Most likely, more complex data can also be stored in the same way, just don't fotget
		// that if it's an object, you gotta spread it first with ... operator.
		editPost({ meta: { dxgc_layout_picker: value } });
	};

	return (
		<>
			<PluginSidebarMoreMenuItem target="sidebar-name">
				Page layout
			</PluginSidebarMoreMenuItem>

			<PluginSidebar name="sidebar-name" title="Page Layout">
				<div className="plugin-sidebar-content">
					<div className="layout-picker-group">
						<button
							className={
								postMeta.dxgc_layout_picker === "left-sidebar" && "is-active"
							}
							onClick={() => handleButtonSelect("left-sidebar")}
						>
							<svg
								width="79"
								height="59"
								viewBox="0 0 79 59"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<rect
									x="0.5"
									y="0.5"
									width="78"
									height="58"
									rx="3.5"
									fill="white"
									stroke="var(--color-stroke)"
								/>
								<line
									x1="22.5"
									y1="58"
									x2="22.5"
									y2="1"
									stroke="var(--color-stroke)"
								/>
								<path
									d="M1 4C1 2.34314 2.34315 1 4 1H22V58H4C2.34315 58 1 56.6569 1 55V4Z"
									fill="var(--color-fill)"
								/>
							</svg>
							<span>Left</span>
						</button>

						<button
							className={
								postMeta.dxgc_layout_picker === "right-sidebar" && "is-active"
							}
							onClick={() => handleButtonSelect("right-sidebar")}
						>
							<svg
								width="79"
								height="59"
								viewBox="0 0 79 59"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<rect
									x="0.5"
									y="-0.5"
									width="78"
									height="58"
									rx="3.5"
									transform="matrix(-1 0 0 1 79 1)"
									fill="white"
									stroke="var(--color-stroke)"
								/>
								<line
									y1="-0.5"
									x2="57"
									y2="-0.5"
									transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 56 58)"
									stroke="var(--color-stroke)"
								/>
								<path
									d="M78 4C78 2.34314 76.6569 1 75 1H57V58H75C76.6569 58 78 56.6569 78 55V4Z"
									fill="var(--color-fill)"
								/>
							</svg>

							<span>Right</span>
						</button>

						<button
							className={
								postMeta.dxgc_layout_picker === "no-sidebar" && "is-active"
							}
							onClick={() => handleButtonSelect("no-sidebar")}
						>
							<svg
								width="79"
								height="59"
								viewBox="0 0 79 59"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<rect
									x="0.5"
									y="-0.5"
									width="78"
									height="58"
									rx="3.5"
									transform="matrix(-1 0 0 1 79 1)"
									fill="white"
									stroke="var(--color-stroke)"
								/>
							</svg>

							<span>Fullwidth</span>
						</button>
					</div>

					<Text>
						With a fullwidth layout, you can begin building landing pages.
						Sidebar layout works best for blog content.
					</Text>
				</div>
			</PluginSidebar>
		</>
	);
};

export const icon = more;
