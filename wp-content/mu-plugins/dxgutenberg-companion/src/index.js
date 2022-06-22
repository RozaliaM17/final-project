import { registerBlockType } from "@wordpress/blocks";

import { setupSidebar } from "./sidebar";

// A list of all the blocks we have created:
import * as test from "./blocks/test";
import "./style.scss";

/**
 * Function to register an individual block.
 *
 * @param {Object} block The block to be registered.
 *
 */
const registerBlock = (block) => {
	if (!block) {
		return;
	}
	const { metadata, settings, name } = block;
	registerBlockType({ name, ...metadata }, settings);
};

/**
 * Function to get all the blocks in an array.
 */
export const dxgutenbergCompanionBlocks = [test];

// Run the init to all our blocks:
dxgutenbergCompanionBlocks.forEach(registerBlock);
setupSidebar();
